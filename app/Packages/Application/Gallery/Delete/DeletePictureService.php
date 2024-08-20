<?php

namespace App\Packages\Application\Gallery\Delete;
use App\Packages\Application\ICP_Services\GetOneService\GetServiceRequest;
use App\Packages\Infrastructure\GalleryRepository;


class DeletePictureService{

    protected $gallery_Repository;
    protected $id;

    public function __construct(GalleryRepository $galleryRepository, GetServiceRequest $getServiceRequest)
    {
        $this->gallery_Repository=$galleryRepository;
        $this->id=$getServiceRequest->getID();
    }

    public function deletePicture(){
        return $this->gallery_Repository->deletePicture($this->id);
    }
}