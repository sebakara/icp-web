<?php

namespace App\Packages\Application\Certificate\Update;
use App\Packages\Application\Certificate\Update\UpdateCertificateRequest;
use App\Packages\Infrastructure\CertificateRepository;


class UpdateCertificateService{

    protected $id;
    protected $name;
    protected $program;
    protected $date;
    protected $certificate_repository;

    public function __construct(CertificateRepository $certificateRepository, UpdateCertificateRequest $updateCertificateRequest)
    {
        $this->certificate_repository=$certificateRepository;
        $this->id=$updateCertificateRequest->getID();
        $this->name=$updateCertificateRequest->getName();
        $this->program=$updateCertificateRequest->getProgram();
        $this->date=$updateCertificateRequest->getDate();
    }

    public function updateCertifiate(){
        return $this->certificate_repository->updateCertificate($this->id, ['name'=>$this->name, 'program'=>$this->program, 'date'=>$this->date]);
    }
}