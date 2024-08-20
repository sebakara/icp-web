<?php

namespace App\Packages\Application\Gallery\Find;
use App\Packages\Application\ICP_Services\GetOneService\GetServiceRequest;
use App\Packages\Infrastructure\GalleryRepository;


class GetOnePictureService{

    protected $getPictureRequest;
    protected $picture_Repository;

    public function __construct(GetServiceRequest $getServiceRequest, GalleryRepository $galleryRepository)
    {
        $this->getPictureRequest = $getServiceRequest->getID();
        $this->picture_Repository=$galleryRepository;
    }

    public function findOnePicture(){

        return $this->picture_Repository->getOnePicture($this->getPictureRequest);
    }
}