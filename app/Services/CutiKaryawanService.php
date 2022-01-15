<?php 

namespace App\Services;
use App\Services\Interfaces\CutiKaryawanServiceInterface;
use App\Models\{Cuti, Karyawan};

class CutiKaryawanService  implements CutiKaryawanServiceInterface
{
    private $cutiKaryawan, $karyawan;
    public function __construct(Cuti $cutiKaryawan, Karyawan $karyawan)
    {
        $this->cutiKaryawan = $cutiKaryawan;
        $this->karyawan = $karyawan;
    }
    public function getAll(){
        return $this->cutiKaryawan->with('karyawan')->get();
    }
    public function getAllKaryawan()
    {
        return  $this->karyawan->get();
    }
    public function detail($id){
        return $this->cutiKaryawan->findOrFail($id);
    }
    public function create(){
        return $this->cutiKaryawan = new Cuti();
    }
    public function save($request){
        $data = $request->all();
        $data['file'] ='kuyydhsvhds';
        return $this->cutiKaryawan->create($data);
    }
    public function edit($id) {
        return $this->cutiKaryawan->findOrFail($id);
    }
    public function update($request, $id){
        $data = $request->all();
        $item = $this->cutiKaryawan->findOrFail($id);
        $item->update($data);
    }
}
