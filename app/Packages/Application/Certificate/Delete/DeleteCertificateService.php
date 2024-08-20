<?php

namespace App\Packages\Application\Certificate\Delete;
use App\Packages\Application\ICP_Services\GetOneService\GetServiceRequest;
use App\Packages\Infrastructure\CertificateRepository;


class DeleteCertificateService{

    protected $certificate_Repository;
    protected $id;

    public function __construct(CertificateRepository $certificateRepository, GetServiceRequest $getServiceRequest)
    {
        $this->certificate_Repository=$certificateRepository;
        $this->id=$getServiceRequest->getID();
    }

    public function deleteCertificate(){
        return $this->certificate_Repository->deleteCertificate($this->id);
    }
}