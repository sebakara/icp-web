<?php

namespace App\Packages\Infrastructure;
use App\Models\Gallery;


class GalleryRepository{

    protected $gallery_model;

    public function __construct()
    {
        $this->gallery_model = new Gallery(); 
    }

    public function getAllIPictures(){
        return $this->gallery_model->get();
    }

    public function getOnePicture(string $id){

        return $this->gallery_model->where('id', $id)->get();

    }

    public function updatePicture(string $id, array $data){

        $id = $this->gallery_model::findOrFail($id);
        return $id->update($data);

    }

    public function deletePicture(string $id){

        return $this->gallery_model->destroy($id);
        
    }

    public function createPicture(string $Image_category, string $Image){

        return $this->gallery_model::create([
            'Image_category'=>$Image_category,
            'Image'=>$Image,
           
        ]);
    }
}