<?php

namespace App\Packages\Application\Staff\Find;
use App\Packages\Application\ICP_Services\GetOneService\GetServiceRequest;
use App\Packages\Infrastructure\StaffRepository;


class GetOneStaffService{

    protected $getstaffRequest;
    protected $staff_Repository;

    public function __construct(GetServiceRequest $getServiceRequest, StaffRepository $staffRepository)
    {
        $this->getstaffRequest = $getServiceRequest->getID();
        $this->staff_Repository=$staffRepository;
    }

    public function findOneStaff(){

        return $this->staff_Repository->getOneStaff($this->getstaffRequest);
    }
}