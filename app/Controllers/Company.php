<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Company extends BaseController {
    public function index() {
        return view('companies/index');
    }
}
