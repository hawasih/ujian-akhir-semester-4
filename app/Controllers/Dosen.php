<?php

namespace App\Controllers;

use App\Models\DosenModel;
use CodeIgniter\Controller;

class Dosen extends Controller
{
    public function index()
    {
        $dosenModel = new DosenModel();
        $data['dosen'] = $dosenModel->getDosen();

        return view('dosen', $data);
    }

    
}
