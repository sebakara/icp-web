<?php

namespace App\Packages\Application\Staff\Create;
use App\Packages\Application\Staff\Create\CreateStaffRequest;
use App\Packages\Infrastructure\StaffRepository;

class CreateStaffService{

    protected $Full_name;
    protected $Position;
    protected $Profile_image;
    protected $Biography_description;
    protected $staff_repository;
    
    public function __construct(CreateStaffRequest $createStaffRequest, StaffRepository $staffRepository)
    {
        $this->Full_name=$createStaffRequest->Full_name();
        $this->Position=$createStaffRequest->Position();
        $this->Profile_image=$createStaffRequest->Profile_image();
        $this->Biography_description=$createStaffRequest->Biography_description();
        $this->staff_repository=$staffRepository;
    }

    public function createStaff(){
        return $this->staff_repository->createStaff($this->Full_name, $this->Position, $this->Profile_image, $this->Biography_description);
    }
}