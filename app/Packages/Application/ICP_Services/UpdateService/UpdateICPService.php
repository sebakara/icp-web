<?php

namespace App\Packages\Application\ICP_Services\UpdateService;
use App\Packages\Application\ICP_Services\UpdateService\UpdateICPRequest;
use App\Packages\Infrastructure\ICP_ServiceRepository;



class UpdateICPService{

    protected $icp_Repository;
    protected $id;
    protected $title;
    protected $description;

    public function __construct(ICP_ServiceRepository $icp_Repository, UpdateICPRequest $updateICPRequest)
    {
        $this->icp_Repository=$icp_Repository;
        $this->id=$updateICPRequest->getID();
        $this->title=$updateICPRequest->getTitle();
        $this->description= $updateICPRequest->getDescription();
    }

    public function updateICP(){

        return $this->icp_Repository->updateIcp($this->id, ['Service_title'=>$this->title, 'Service_description'=>$this->description]);
    }
}