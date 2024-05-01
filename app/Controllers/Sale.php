<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Sale extends BaseController
{
    public function index()
    {
        return view('sales/index');
    }
}
