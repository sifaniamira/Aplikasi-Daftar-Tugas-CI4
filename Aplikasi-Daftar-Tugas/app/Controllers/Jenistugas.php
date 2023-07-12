<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step1
use App\Models\JenistugasModel;

class Jenistugas extends BaseController
{

    //step 2
    protected $Jenistugas;
    // step 3 buat fungsi konstrak untuk inisiasi model
    public function __construct()
    {
        //step 4
        $this->Jenistugas = new JenistugasModel();
    }

    public function index()
    {
        $data['data_jenistugas'] = $this->Jenistugas->getJenistugas();
        return view("Jenistugas/index", $data);
    }

    public function all()
    {
        $data['data_jenistugas'] = $this->Jenistugas->getAllData();
        return view("Jenistugas/semuajenistugas", $data);
    }
}
