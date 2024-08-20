<?php

namespace App\Packages\Application\CustomerSupport\Find;
use App\Packages\Application\ICP_Services\GetOneService\GetServiceRequest;
use App\Packages\Infrastructure\CustomerSupportRepository;


class FindOneMessageService{

    protected $getMessageRequest;
    protected $customer_Repository;

    public function __construct(GetServiceRequest $getServiceRequest, CustomerSupportRepository $customerSupportRepository)
    {
        $this->getMessageRequest = $getServiceRequest->getID();
        $this->customer_Repository=$customerSupportRepository;
    }

    public function findOneMessage(){

        return $this->customer_Repository->getOneCustomer($this->getMessageRequest);
    }
}