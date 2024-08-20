<?php

namespace App\Packages\Application\ICP_Services\CreateService;
use App\Packages\Application\ICP_Services\CreateService\CreateICPRequest;
use App\Packages\Infrastructure\ICP_ServiceRepository;

class CreateICPService{

    protected $Service_title;
    protected $Service_description;
    protected $Icon;
    protected $icp_repository;
    
    public function __construct(CreateICPRequest $createICPRequest, ICP_ServiceRepository $iCP_ServiceRepository)
    {
        $this->Service_title=$createICPRequest->getService_title();
        $this->Service_description=$createICPRequest->getService_description();
        $this->Icon=$createICPRequest->getIcon();
        $this->icp_repository=$iCP_ServiceRepository;
    }

    public function createICP(){
        return $this->icp_repository->createIcp($this->Service_title, $this->Service_description, $this->Icon);
    }
}