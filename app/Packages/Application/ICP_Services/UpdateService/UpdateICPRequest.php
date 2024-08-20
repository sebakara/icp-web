<?php

namespace App\Packages\Application\ICP_Services\UpdateService;
use Illuminate\Http\Request;


class UpdateICPRequest{

    protected $id;
    protected $description;
    protected $title;

    public function __construct(Request $request)
    {
        $this->id=$request->input('Service_id');
        $this->title = $request->input('Service_title');
        $this->description=$request->input('Service_description');
    }

    public function getID(){

        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription(){
        return $this->description;
    }
}