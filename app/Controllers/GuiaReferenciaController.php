<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PacienteModel;

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

    public function filas()
    {
        return view('guiareferencia/filas');
    }

    public function minhasguias()
    {
        return view('guiareferencia/guias');
    }

    public function cadastrarPaciente()
    {
        $dados = $this->request->getVar();
        $paciente_model = new PacienteModel();
        $paciente_model->insert($dados);
        
    }

    public function carregarPaciente() {
        $cdr = $this->request->getGet('cdr');

        $pacienteModel = new PacienteModel();
        $paciente = $pacienteModel->where(PacienteModel::CDR, $cdr)->find();
        $data['paciente'] = $paciente;

        return $this->response->setJSON($data);
    }

    public function cadastrarGuia() {
        $dados = $this->request->getVar();
    }
}
