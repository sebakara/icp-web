<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\BestProject;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Mail\CourseCompletionCertificateMail;
use App\Mail\ParticipationCertificateMail;
use App\Mail\SpecialCertificateMail;
use Illuminate\Support\Facades\Mail;




class CertificateController extends Controller
{

    public function showCreateForm()
    {
        return view('admin.create-certificate');
    }

    // Course Completion Certificate
    public function generate(Request $request)
    {
        ini_set('memory_limit', '256M');

        $data = $request->validate([
            'name' => 'required|string',
            'program' => 'required|string',
            'date' => 'required|date',
            'email' => 'required',
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
            'file_path' => 'assets/certificates/' . $fileName,
            'qr_code_path' => 'certificates/' . $qrCodeFilePath,
        ]);

        // Send the email to the student with the certificate link
        $certificateUrl = url('storage/' . $filePath); // Public URL to the certificate
        // Make sure to set the 'from' address here
        Mail::to($data['email'])->send(new CourseCompletionCertificateMail($certificateUrl));

        // Optionally, you can return the file or redirect
        return $pdf->stream('certificate.pdf');
    }


    // Participation certificate
    public function generateParticipationCertificate(Request $request)
    {
        ini_set('memory_limit', '256M');

        $data = $request->validate([
            'name' => 'required|string',
            'program' => 'required|string',
            'date' => 'required|date',
            'email' => 'required',
        ]);

        // Generate a unique file name for the certificate
        $fileName = 'certificate_' . time() . '.pdf';
        $filePath = 'assets/certificates/participation/' . $fileName;

        // Generate QR code URL
        $certificateUrl = url('assets/certificates/participation' . $fileName);


        $qrCodeContent = QrCode::format('png')->size(100)->generate($certificateUrl);
        $qrCodeFilePath = 'assets/certificates/participation/qrcode_' . time() . '.png';

        File::ensureDirectoryExists(public_path('assets/certificates/participation'));
        File::put(public_path($qrCodeFilePath), $qrCodeContent);

        // Add QR code to the data array

        $data['qr_code'] = $qrCodeFilePath;

        $htmlTemplate = File::get(public_path('AttendingCertificate.html'));

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
            'file_path' => 'assets/certificates/participation/' . $fileName,
            'qr_code_path' => 'certificates/participation/' . $qrCodeFilePath,
        ]);

        // Send the email to the student with the certificate link
        $certificateUrl = url('storage/' . $filePath); // Public URL to the certificate
        // Make sure to set the 'from' address here
        Mail::to($data['email'])->send(new ParticipationCertificateMail($certificateUrl));


        // Optionally, you can return the file or redirect
        return $pdf->stream('certificate.pdf');
    }

    // Best/Winner Project or Special Certificate
    public function generateSpecialCertificate(Request $request)
    {
        ini_set('memory_limit', '256M');

        $data = $request->validate([
            'name' => 'required|string',
            'project_name_or_special_award' => 'required|string',
            'description' => 'string',
            'date' => 'required|date',
            'email' => 'required',
        ]);

        // Generate a unique file name for the certificate
        $fileName = 'certificate_' . time() . '.pdf';
        $filePath = 'assets/certificates/special' . $fileName;

        // Generate QR code URL
        $certificateUrl = url('assets/certificates/special' . $fileName);


        $qrCodeContent = QrCode::format('png')->size(100)->generate($certificateUrl);
        $qrCodeFilePath = 'assets/certificates/special/qrcode_' . time() . '.png';

        File::ensureDirectoryExists(public_path('assets/certificates/special'));
        File::put(public_path($qrCodeFilePath), $qrCodeContent);

        // Add QR code to the data array

        $data['qr_code'] = $qrCodeFilePath;

        $htmlTemplate = File::get(public_path('SpecialCertificate.html'));

        $htmlTemplate = str_replace('{{ $name }}', $data['name'], $htmlTemplate);
        $htmlTemplate = str_replace('{{ $project_name_or_special_award }}', $data['project_name_or_special_award'], $htmlTemplate);
        $htmlTemplate = str_replace('{{ $date }}', $data['date'], $htmlTemplate);
        $htmlTemplate = str_replace('{{ $qr_code }}', $data['qr_code'], $htmlTemplate);

        // Load the HTML template and generate PDF
        $pdf = PDF::loadHTML($htmlTemplate)
            ->setPaper('a4', 'landscape');


        // Save the PDF to storage
        Storage::disk('public')->put($filePath, $pdf->output());

        $certificate = BestProject::create([
            'student_full_name' => $data['name'],
            'project_name_or_special_award' => $data['project_name_or_special_award'],
            'description' => $data['description'],
            'date' => $data['date'],
            'file_path' => 'assets/certificates/special/' . $fileName,
            'qr_code_path' => 'certificates/special/' . $qrCodeFilePath,
        ]);

        // Send the email to the student with the certificate link
        $certificateUrl = url('storage/' . $filePath); // Public URL to the certificate
        // Make sure to set the 'from' address here
        Mail::to($data['email'])->send(new SpecialCertificateMail($certificateUrl));

        // Optionally, you can return the file or redirect
        return $pdf->stream('certificate.pdf');
    }

    public function showAllCertificates()
    {
        return view('admin.all-certificates'); // Render the Blade template
    }

    public function fetchCertificates()
    {
        $certificates = Certificate::all()->map(function ($certificate) {
            return [
                'id' => $certificate->id,
                'name' => $certificate->name,
                'program' => $certificate->program,
                'date' => $certificate->date,
                'file_url' => Storage::url('public/' . $certificate->file_path), // Generate the URL here
            ];
        });

        return response()->json($certificates);
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

        return response()->json(['success' => 'Certificate deleted successfully']);
    }

    public function showCoursesWithStudents()
    {
        $courses = Course::with('students')->get();

        return view('courses.students', compact('courses'));
    }
}
