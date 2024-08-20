<?php

namespace App\Packages\Application\Certificate\All;
use App\Packages\Infrastructure\CertificateRepository;

class AllCertificateService{

    protected $certificate_repository;

    public function __construct(CertificateRepository $certificateRepository)
    {
        $this->certificate_repository=$certificateRepository;
    }

    public function getAllCertificate(){
        return $this->certificate_repository->getAllCertificate();
    }
}