<?php

namespace App\Packages\Application\Staff\Delete;
use App\Packages\Application\ICP_Services\GetOneService\GetServiceRequest;
use App\Packages\Infrastructure\StaffRepository;


class DeleteStaffService{

    protected $staff_Repository;
    protected $id;

    public function __construct(StaffRepository $staffRepository, GetServiceRequest $getServiceRequest)
    {
        $this->staff_Repository=$staffRepository;
        $this->id=$getServiceRequest->getID();
    }

    public function deleteStaff(){
        return $this->staff_Repository->deleteStaff($this->id);
    }
}