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
    // Recebe os dados do POST (em formato JSON)
    $dados = $this->request->getJSON(true);  // true para retornar como array associativo

    // Log para verificar o conteúdo recebido
    log_message('debug', 'Dados recebidos: ' . print_r($dados, true));

    // Verifica se os dados estão sendo recebidos corretamente
    if (empty($dados)) {
        return $this->response->setJSON([
            'success' => false,
            'message' => 'Não há dados para inserir.'
        ]);
    }

    // Verificando se os campos esperados estão no array
    $requiredFields = ['pacienteCdr', 'pacienteNome', 'pacienteDataNascimento', 'pacientePeso', 'pacienteAltura'];
    foreach ($requiredFields as $field) {
        if (!isset($dados[$field])) {
            return $this->response->setJSON([
                'success' => false,
                'message' => "Campo obrigatório '$field' não encontrado."
            ]);
        }
    }

    // Se os dados estiverem presentes, você pode continuar com a inserção
    $paciente_model = new PacienteModel();
    
    // Verifique se a inserção foi bem-sucedida
    if ($paciente_model->insert($dados)) {
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Paciente salvo com sucesso!'
        ]);
    } else {
        return $this->response->setJSON([
            'success' => false,
            'message' => 'Erro ao salvar paciente.'
        ]);
    }
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
