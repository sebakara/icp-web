<?php

namespace App\Packages\Application\ICP_Services\GetOneService;
use App\Packages\Application\ICP_Services\GetOneService\GetServiceRequest;
use App\Packages\Infrastructure\ICP_ServiceRepository;


class GetOneICPService{

    protected $getServiceRequest;
    protected $icp_Repository;


    public function __construct(GetServiceRequest $getServiceRequest, ICP_ServiceRepository $icp_Repository)
    {
        $this->getServiceRequest = $getServiceRequest->getID();
        $this->icp_Repository = $icp_Repository;
    }

    public function findOneService(){

        return $this->icp_Repository->getOneIcp($this->getServiceRequest);
    }
}