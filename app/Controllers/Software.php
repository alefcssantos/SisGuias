<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Software extends BaseController
{
    public function index()
    {
        return view('softwares/index');
    }
}
