<?php

namespace App\Services;

use App\Services\Interfaces\KaryawanServicesInterfaces;
use App\Models\Karyawan;

class KaryawanServices implements KaryawanServicesInterfaces
{
    private $karyawanService;

    public function __construct(Karyawan $karyawanService)
    {
        $this->karyawanService = $karyawanService;
    }

    public function getAll($request){
        return $this->karyawanService->all();
    }

    public function get($id){
        return $this->karyawanService->findById($id);
    }
}
