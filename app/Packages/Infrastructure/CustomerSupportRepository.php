<?php

namespace App\Packages\Infrastructure;
use App\Models\Customer_Support;

class CustomerSupportRepository{

    protected $customer_model;

    public function __construct()
    {
        $this->customer_model = new Customer_Support(); 
    }

    public function getAllCustomer(){
        return $this->customer_model->get();
    }

    public function getOneCustomer(string $id){

        return $this->customer_model->where('id', $id)->get();
    }

    public function updateCustomer(string $id, array $data){

        $id = $this->customer_model::findOrFail($id);
        return $id->update($data);

    }

    public function deleteCustomer(string $id){

        return $this->customer_model->destroy($id);
        
    }

    public function createCustomer(string $Full_name, string $Email, string $Subject, string $Message){

        $this->customer_model::create([
            'Full_name'=>$Full_name,
            'Email'=>$Email,
            'Subject'=>$Subject,
            'Message'=>$Message,
        ]);
        return response('OK', 200);
    }
}