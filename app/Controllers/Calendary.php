<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Calendary extends BaseController
{
    public function index()
    {
        return view('calendary/index');
    }
}
