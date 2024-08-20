<?php

namespace App\Packages\Application\Certificate\Update;
use Illuminate\Http\Request;


class UpdateCertificateRequest{

    protected $id;
    protected $name;
    protected $program;
    protected $date;

    public function __construct(Request $request)
    {
        $this->id=$request->input('Certificate_id');
        $this->name=$request->input('Full_name');
        $this->program=$request->input('Program');
        $this->date=$request->input('Date');
    }

    public function getID(){

        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getProgram(){
        return $this->program;
    }

    public function getDate(){
        return $this->date;
    }
}