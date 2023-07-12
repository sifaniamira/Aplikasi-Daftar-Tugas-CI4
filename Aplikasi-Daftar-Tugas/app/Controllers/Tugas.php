<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step1
use App\Models\TugasModel;
use App\Models\JenistugasModel;

class Tugas extends BaseController
{

    //step 2
    protected $tugas;
    protected $jenistugas;
    // step 3 buat fungsi konstrak untuk inisiasi model
    public function __construct()
    {
        //step 4
        $this->tugas = new TugasModel();
        $this->jenistugas = new JenistugasModel();
    }
    public function all()
    {
        $data['semuatugas'] = $this->tugas->getAllDataJoin();
        return view("tugas/semuatugas", $data);
    }
    public function index()
    {
        $data['data_tugas'] = $this->tugas->getAllDataJoin();
        return view("tugas/index", $data);
    }

    public function add()
    {
        $data["jenistugas"] = $this->jenistugas->getAllData();
        $data["erors"] = session('errors');
        return view("tugas/add", $data);
    }
    //buat ke form update
    public function update($id)
    {
        $data["jenistugas"] = $this->jenistugas->getAllData();
        $data["errors"] = session('errors');
        $data["datatugas"] = $this->tugas->getDataByID($id);
        return view("tugas/edit", $data);
    }

    //buat simpan data
    public function edit()
    {

        //Ambil data lama
        $tugas = $this->tugas->find($this->request->getPost('id_tugas'));
        //tambah request ID
        $data = [
            'id_tugas' => $this->request->getPost('id_tugas'),
            'nama_tugas' => $this->request->getPost('nama_tugas'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'id_jenistugas' => $this->request->getPost('id_jenistugas'),
            'deadline' => $this->request->getPost('deadline'),
        ];

        $this->tugas->save($data);
        session()->setFlashData('success', 'Data berhasil diperbarui');
        return redirect()->to('/tugas');
    }
}
