<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Packages\Application\Staff\All\GetAllStaffService;
use App\Packages\Application\Staff\Create\CreateStaffRequest;
use App\Packages\Application\Staff\Create\CreateStaffService;
use App\Packages\Application\Staff\Find\GetOneStaffService;
use App\Packages\Application\Staff\Update\UpdateStaffRequest;
use App\Packages\Application\Staff\Update\UpdateStaffService;
use App\Packages\Application\ICP_Services\GetOneService\GetServiceRequest;
use App\Packages\Application\Staff\Delete\DeleteStaffService;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    
    public function createStaff(CreateStaffService $createStaffService)
    {
        
        return $createStaffService->createStaff();
    }

    public function getAllStaff(GetAllStaffService $getAllStaffService){
        
        return $getAllStaffService->getAllStaff();

    }

    public function getAllStafffrontend(){

        $staffs = Staff::all();

        return view('client.index', compact('staffs'));
    }

    public function getOneStaff(Request $request, GetOneStaffService $getOneStaffService){

        $staffRequest = new GetServiceRequest($request);
        return $getOneStaffService->findOneStaff($staffRequest);

    }

    public function updateStaff(Request $request, UpdateStaffService $updateStaffService){

        $staffRequest = new UpdateStaffRequest($request);
        return $updateStaffService->updateBiograph($staffRequest);

    }

    public function deleteStaff(Request $request, DeleteStaffService $deleteStaffService){

        $staffRequest = new GetServiceRequest($request);
        return $deleteStaffService->deleteStaff($staffRequest);
    }
}


