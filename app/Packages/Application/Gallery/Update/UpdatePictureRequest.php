<?php

namespace App\Packages\Application\Gallery\Update;
use Illuminate\Http\Request;


class UpdatePictureRequest{

    protected $id;
    protected $Image_category;

    public function __construct(Request $request)
    {
        $this->id=$request->input('Image_id');
        $this->Image_category=$request->input('Image_category');
    }

    public function getID(){

        return $this->id;
    }

    public function getImageCategory(){
        return $this->Image_category;
    }
}