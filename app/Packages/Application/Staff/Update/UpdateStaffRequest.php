<?php

namespace App\Packages\Application\Staff\Update;
use Illuminate\Http\Request;


class UpdateStaffRequest{

    protected $id;
    protected $Biography_description;

    public function __construct(Request $request)
    {
        $this->id=$request->input('Staff_id');
        $this->Biography_description=$request->input('Biography_description');
    }

    public function getID(){

        return $this->id;
    }

    public function getBiography_description(){
        return $this->Biography_description;
    }
}