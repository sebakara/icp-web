<?php

namespace App\Packages\Application\Gallery\Create;
use App\Packages\Application\Gallery\Create\CreatePictureRequest;
use App\Packages\Infrastructure\GalleryRepository;

class CreatePictureService{

    protected $Image_category;
    protected $Image;
    protected $galleryRepository;
    
    public function __construct(CreatePictureRequest $createPictureRequest, GalleryRepository $galleryRepository)
    {
        $this->Image_category=$createPictureRequest->getImage_category();
        $this->Image=$createPictureRequest->getImage();
        $this->galleryRepository=$galleryRepository;
    }

    public function createPicture(){
        return $this->galleryRepository->createPicture($this->Image_category, $this->Image);
    }
}