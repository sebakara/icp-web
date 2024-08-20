<?php

namespace App\Packages\Application\Gallery\All;
use App\Packages\Infrastructure\GalleryRepository;

class GetAllPictures{

    protected $gallery_repository;

    public function __construct(GalleryRepository $gallery_repository)
    {
        $this->gallery_repository=$gallery_repository;
    }

    public function getAllPicture(){
        return $this->gallery_repository->getAllIPictures();
    }
}