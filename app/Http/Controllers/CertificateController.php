<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;



class CertificateController extends Controller
{
    public function generate(Request $request)
    {
        ini_set('memory_limit', '256M');

        $data = $request->validate([
            'name' => 'required|string',
            'program' => 'required|string',
            'date' => 'required|date',
        ]);

        // Generate a unique file name for the certificate
        $fileName = 'certificate_' . time() . '.pdf';
        $filePath = 'assets/certificates/' . $fileName;

        // Generate QR code URL
        $certificateUrl = url('assets/certificates/' . $fileName);


        $qrCodeContent = QrCode::format('png')->size(100)->generate($certificateUrl);
        $qrCodeFilePath = 'assets/certificates/qrcode_' . time() . '.png';

        File::ensureDirectoryExists(public_path('assets/certificates'));
        File::put(public_path($qrCodeFilePath), $qrCodeContent);

        // Add QR code to the data array

        $data['qr_code'] = $qrCodeFilePath;

        $htmlTemplate = File::get(public_path('certificate.html'));

        $htmlTemplate = str_replace('{{ $name }}', $data['name'], $htmlTemplate);
        $htmlTemplate = str_replace('{{ $program }}', $data['program'], $htmlTemplate);
        $htmlTemplate = str_replace('{{ $date }}', $data['date'], $htmlTemplate);
        $htmlTemplate = str_replace('{{ $qr_code }}', $data['qr_code'], $htmlTemplate);

        // Load the HTML template and generate PDF
        $pdf = PDF::loadHTML($htmlTemplate)
                ->setPaper('a4', 'landscape');
                                                    

        // Save the PDF to storage
        Storage::disk('public')->put($filePath, $pdf->output());

        $certificate = Certificate::create([
            'name' => $data['name'],
            'program' => $data['program'],
            'date' => $data['date'],
            'file_path' => 'certificates/' . $fileName,
            'qr_code_path' => 'certificates/' . $qrCodeFilePath,
        ]);

        // Optionally, you can return the file or redirect
        return $pdf->stream('certificate.pdf');
    }

    // Fetch All Certificates
    public function getAllCertificates()
    {
        $certificates = Certificate::all();
        return response()->json($certificates);
    }

    // Fetch One Certificate
    public function getOneCertificate($id)
    {
        $certificate = Certificate::findOrFail($id);
        return response()->json($certificate);
    }

    // Update Certificate
    public function updateCertificate(Request $request, $id)
    {
        $certificate = Certificate::findOrFail($id);

        $data = $request->validate([
            'name' => 'string',
            'program' => 'string',
            'date' => 'date',
        ]);

        $certificate->update($data);
        return response()->json($certificate);
    }

    // Delete Certificate
    public function deleteCertificate($id)
    {
        $certificate = Certificate::findOrFail($id);
        Storage::disk('public')->delete($certificate->file_path);
        Storage::disk('public')->delete($certificate->qr_code_path);
        $certificate->delete();

        return response()->json(['message' => 'Certificate deleted successfully']);
    }
}
