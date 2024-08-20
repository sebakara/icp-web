<?php

namespace App\Packages\Infrastructure;
use App\Models\Staff;


class StaffRepository{

    protected $staff_model;

    public function __construct()
    {
        $this->staff_model = new Staff(); 
    }

    public function getAllStaff(){
        return $this->staff_model->get();
    }

    public function getOneStaff(string $id){

        return $this->staff_model->where('id', $id)->get();

    }

    public function updateStaff(string $id, array $data){

        $id = $this->staff_model::findOrFail($id);
        return $id->update($data);

    }

    public function deleteStaff(string $id){

        return $this->staff_model->destroy($id);
        
    }

    public function createStaff(string $Full_name, string $Position, string $Profile_image, string $Biography_description){

        return $this->staff_model::create([
            'Full_name'=>$Full_name,
            'Position'=>$Position,
            'Profile_image'=>$Profile_image,
            'Biography_description'=>$Biography_description,
        ]);
    }
}