<?php

namespace App\Packages\Application\Certificate\Find;
use App\Packages\Application\ICP_Services\GetOneService\GetServiceRequest;
use App\Packages\Infrastructure\CertificateRepository;


class FindOneCertificateService{

    protected $getCertificateRequest;
    protected $certificate_Repository;

    public function __construct(GetServiceRequest $getServiceRequest, CertificateRepository $certificateRepository)
    {
        $this->getCertificateRequest = $getServiceRequest->getID();
        $this->certificate_Repository=$certificateRepository;
    }

    public function findOneCertificate(){

        return $this->certificate_Repository->getOneCertificate($this->getCertificateRequest);
    }
}