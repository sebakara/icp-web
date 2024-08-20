<?php

namespace App\Packages\Application\ICP_Services\GetAllServices;
use App\Packages\Infrastructure\ICP_ServiceRepository;

class ICP_Services{

    protected $icp_repository;

    public function __construct(ICP_ServiceRepository $icp_ServiceRepository)
    {
        $this->icp_repository = $icp_ServiceRepository;
    }

    public function getAllICP(){
        return $this->icp_repository->getAllICPService();
    }
}