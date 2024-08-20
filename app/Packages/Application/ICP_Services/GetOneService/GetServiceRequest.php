<?php

namespace App\Packages\Application\ICP_Services\GetOneService;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;


class GetServiceRequest{

    protected $id;

    public function __construct(Request $request)
    {
        $this->id=$request->input('id');
       
    }

    public function getID(){

        return $this->id;
    }
}