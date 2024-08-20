<?php

namespace App\Packages\Application\Staff\Update;
use App\Packages\Application\staff\Update\UpdateStaffRequest;
use App\Packages\Infrastructure\StaffRepository;


class UpdateStaffService{

    protected $staff_Repository;
    protected $id;
    protected $Biography_description;

    public function __construct(StaffRepository $staffRepository, UpdateStaffRequest $updateStaffRequest)
    {
        $this->staff_Repository=$staffRepository;
        $this->id=$updateStaffRequest->getID();
        $this->Biography_description= $updateStaffRequest->getBiography_description();
    }

    public function updateBiograph(){
        return $this->staff_Repository->updateStaff($this->id, ['Biography_description'=>$this->Biography_description]);
    }
}