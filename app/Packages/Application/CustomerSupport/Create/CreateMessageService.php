<?php

namespace App\Packages\Application\CustomerSupport\Create;
use App\Packages\Application\CustomerSupport\Create\CreateMessageRequest;
use App\Packages\Infrastructure\CustomerSupportRepository;


class CreateMessageService{

    protected $Full_name;
    protected $Email;
    protected $Subject;
    protected $Message;
    protected $customer_Repository;

    public function __construct(CreateMessageRequest $createMessageRequest, CustomerSupportRepository $customerSupportRepository)
    {
        $this->Full_name=$createMessageRequest->Full_name();
        $this->Email=$createMessageRequest->Email();
        $this->Subject=$createMessageRequest->Subject();
        $this->Message=$createMessageRequest->Message();
        $this->customer_Repository=$customerSupportRepository;
    }

    public function createMessage(){
        return $this->customer_Repository->createCustomer($this->Full_name, $this->Email, $this->Subject, $this->Message);
    }
}