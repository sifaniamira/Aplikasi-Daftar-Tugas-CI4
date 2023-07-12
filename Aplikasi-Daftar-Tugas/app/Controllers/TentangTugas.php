<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TentangTugas extends BaseController
{
    public function index()
    {
        return view("TentangTugas/TentangTugas");
    }
}
