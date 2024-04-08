<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Teste extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
}
