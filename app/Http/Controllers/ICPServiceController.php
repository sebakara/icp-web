<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Gallery;
use App\Models\Staff;
use App\Packages\Application\ICP_Services\CreateService\CreateICPService;
use App\Packages\Application\ICP_Services\GetAllServices\ICP_Services;
use App\Packages\Application\ICP_Services\GetOneService\GetOneICPService;
use App\Packages\Application\ICP_Services\GetOneService\GetServiceRequest;
use App\Packages\Application\ICP_Services\UpdateService\UpdateICPRequest;
use App\Packages\Application\ICP_Services\UpdateService\UpdateICPService;
use App\Packages\Application\ICP_Services\DeleteService\DeleteICPService;
use Illuminate\Http\Request;

class ICPServiceController extends Controller
{
    
    public function createICP(CreateICPService $createICPService){

        return $createICPService->createICP();

    }

    public function getAllICP(ICP_Services $iCP_Services){
        
        return $iCP_Services->getAllICP();

    }

    public function getDashboard(){

        $services_on_backend = Service::all();

        return view('client.dashboard', ['services_on_backend'=>$services_on_backend]);
    }

    public function getAllICP_frontend(){

        $services = Service::all();

        $pictures = Gallery::all();

        $staffs = Staff::all();

        return view('client.index', ['services' => $services, 'pictures' => $pictures, 'staffs' => $staffs]);
    }

    public function getOneICP(Request $request, GetOneICPService $getOneICPService){

        $icpRequest = new GetServiceRequest($request);
        return $getOneICPService->findOneService($icpRequest);

    }

    public function updateICP(Request $request, UpdateICPService $updateICPService){

        $icpRequest = new UpdateICPRequest($request);
        return $updateICPService->updateICP($icpRequest);
    }

    public function deleteICP(Request $request, DeleteICPService $deleteICPService){

        $icpRequest = new GetServiceRequest($request);
        return $deleteICPService->deleteICP($icpRequest);
    }
}

