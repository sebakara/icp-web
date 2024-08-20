<?php

namespace App\Packages\Application\CustomerSupport\All;
use App\Packages\Infrastructure\CustomerSupportRepository;

class AllMessages{

    protected $customer_repository;

    public function __construct(CustomerSupportRepository $customerSupportRepository)
    {
        $this->customer_repository=$customerSupportRepository;
    }

    public function getAllMessages(){
        return $this->customer_repository->getAllCustomer();
    }
}