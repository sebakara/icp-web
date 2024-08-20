<?php

namespace App\Packages\Application\ICP_Services\DeleteService;
use App\Packages\Application\ICP_Services\GetOneService\GetServiceRequest;
use App\Packages\Infrastructure\ICP_ServiceRepository;


class DeleteICPService{

    protected $icp_Repository;
    protected $id;

    public function __construct(ICP_ServiceRepository $icp_Repository, GetServiceRequest $getServiceRequest)
    {
        $this->icp_Repository=$icp_Repository;
        $this->id=$getServiceRequest->getID();
    }

    public function deleteICP(){
        return $this->icp_Repository->deleteIcp($this->id);
    }
}