<?php

namespace App\Packages\Application\CustomerSupport\Create;

use Illuminate\Http\Request;

class CreateMessageRequest{

    protected $Full_name;
    protected $Email;
    protected $Subject;
    protected $Message;

    public function __construct(Request $request)
    {
        $this->Full_name=$request->input('Full_name');
        $this->Email=$request->input('Email');
        $this->Subject=$request->input('Subject');
        $this->Message=$request->input('Message');
    }

    public function Full_name(){
        return $this->Full_name;
    }
    public function Email(){
        return $this->Email;
    }
    public function Subject(){
        return $this->Subject;
    }
    public function Message(){
        return $this->Message;
    }
}