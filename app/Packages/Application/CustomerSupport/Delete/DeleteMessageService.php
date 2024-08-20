<?php

namespace App\Packages\Application\CustomerSupport\Delete;
use App\Packages\Application\ICP_Services\GetOneService\GetServiceRequest;
use App\Packages\Infrastructure\CustomerSupportRepository;


class DeleteMessageService{

    protected $customer_Repository;
    protected $id;

    public function __construct(CustomerSupportRepository $customerSupportRepository, GetServiceRequest $getServiceRequest)
    {
        $this->customer_Repository=$customerSupportRepository;
        $this->id=$getServiceRequest->getID();
    }

    public function deleteMessage(){
        return $this->customer_Repository->deleteCustomer($this->id);
    }
}