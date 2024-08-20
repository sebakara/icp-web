<?php

namespace App\Packages\Infrastructure;
use App\Models\Certificate;

class CertificateRepository{

    protected $certificate_model;

    public function __construct()
    {
        $this->certificate_model = new Certificate(); 
    }

    public function getAllCertificate(){
        return $this->certificate_model->get();
    }

    public function getOneCertificate(string $id){

        return $this->certificate_model->where('id', $id)->get();
    }

    public function updateCertificate(string $id, array $data){

        $id = $this->certificate_model::findOrFail($id);
        return $id->update($data);

    }

    public function deleteCertificate(string $id){

        return $this->certificate_model->destroy($id);
        
    }

}