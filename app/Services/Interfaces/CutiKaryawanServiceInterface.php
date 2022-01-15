<?php 

namespace App\Services\Interfaces;

interface CutiKaryawanServiceInterface {
    public function getAll();
    public function getAllKaryawan();
    public function detail($id);
    public function create();
    public function save($request);
    public function edit($id);
    public function update($request, $id);
}