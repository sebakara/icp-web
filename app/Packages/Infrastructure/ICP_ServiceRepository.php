<?php

namespace App\Packages\Infrastructure;
use App\Models\Service;


class ICP_ServiceRepository{

    protected $icp_service_model;

    public function __construct()
    {
        $this->icp_service_model = new Service(); 
    }

    public function getAllICPService(){
        $services = $this->icp_service_model->get();
        return response()->json($services);
    }

    public function getOneIcp(string $id){

        return $this->icp_service_model->where('id', $id)->get();

    }

    public function updateIcp(string $id, array $data){

        $id = $this->icp_service_model::findOrFail($id);
        return $id->update($data);

    }

    public function deleteIcp(string $id){

        return $this->icp_service_model->destroy($id);
        
    }

    public function createIcp(string $Service_title, string $Service_description, string $Icon){

        return $this->icp_service_model::create([
            'Service_title'=>$Service_title,
            'Service_description'=>$Service_description,
            'Icon'=>$Icon,
        ]);
    }
}