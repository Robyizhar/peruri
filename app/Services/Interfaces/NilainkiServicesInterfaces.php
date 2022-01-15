<?php

namespace App\Services\Interfaces;

interface NilainkiServicesInterfaces
{
    public function getAllKaryawan();
    public function getAllNilaiNki();
    public function create();
    public function dataTable();
    public function saveNki($value);
    public function edit($id);
    public function updateNKI($request, $id);
    public function deleteNki($id);
}