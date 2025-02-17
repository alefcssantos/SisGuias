<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class GuiaReferenciaController extends BaseController
{
    public function index()
    {
        return view('guiareferencia/guias');
    }

    public function cadastro()
    {
        return view('guiareferencia/cadastro');
    }

    public function triagemLista()
    {
        return view('guiareferencia/triagem');
    }

    public function triagemPaciente()
    {
        return view('guiareferencia/triagem/paciente');
    }
}
