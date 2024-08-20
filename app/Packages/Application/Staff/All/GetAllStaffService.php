<?php

namespace App\Packages\Application\Staff\All;
use App\Packages\Infrastructure\StaffRepository;

class GetAllStaffService{

    protected $staff_repository;

    public function __construct(StaffRepository $staffRepository)
    {
        $this->staff_repository=$staffRepository;
    }

    public function getAllStaff(){
        return $this->staff_repository->getAllStaff();
    }
}