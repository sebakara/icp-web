<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Packages\Application\Gallery\Create\CreatePictureRequest;
use App\Packages\Application\Gallery\Create\CreatePictureService;
use App\Packages\Application\Gallery\All\GetAllPictures;
use App\Packages\Application\Gallery\Find\GetOnePictureService;
use App\Packages\Application\ICP_Services\GetOneService\GetServiceRequest;
use App\Packages\Application\Gallery\Update\UpdatePictureRequest;
use App\Packages\Application\Gallery\Update\UpdatePictureService;
use App\Packages\Application\Gallery\Delete\DeletePictureService;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    
    public function createPicture(Request $request, CreatePictureService $createPictureService){

        return $createPictureService->createPicture();

    }

    public function getAllPicture(GetAllPictures $getAllPictures){
        
        return $getAllPictures->getAllPicture();

    }

    public function getAllPicture_frontend(){

        $pictures = Gallery::all();

        return view('client.index', compact('pictures'));
    }

    public function getOnePicture(Request $request, GetOnePictureService $getOnePictureService){

        $pictureRequest = new GetServiceRequest($request);
        return $getOnePictureService->findOnePicture($pictureRequest);

    }

    public function updatePicture(Request $request, UpdatePictureService $updatePictureService){

        $pictureRequest = new UpdatePictureRequest($request);
        return $updatePictureService->updatePictures($pictureRequest);

    }

    public function deletePicture(Request $request, DeletePictureService $deletePictureService){

        $pictureRequest = new GetServiceRequest($request);
        return $deletePictureService->deletePicture($pictureRequest);
    }
}


