<?php

namespace App\Packages\Application\Gallery\Update;
use App\Packages\Application\Gallery\Update\UpdatePictureRequest;
use App\Packages\Infrastructure\GalleryRepository;


class UpdatePictureService{

    protected $gallery_Repository;
    protected $id;
    protected $Image_category;

    public function __construct(GalleryRepository $galleryRepository, UpdatePictureRequest $updatePictureRequest)
    {
        $this->gallery_Repository=$galleryRepository;
        $this->id=$updatePictureRequest->getID();
        $this->Image_category= $updatePictureRequest->getImageCategory();
    }

    public function updatePictures(){
        return $this->gallery_Repository->updatePicture($this->id, ['Image_category'=>$this->Image_category]);
    }
}