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
}
