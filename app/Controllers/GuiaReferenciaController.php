<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GuiaReferenciaModel;
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

    public function salvarPaciente()
    {
        $dados = $this->request->getJSON(true);
        log_message('debug', 'Dados recebidos: ' . print_r($dados, true));

        if (empty($dados)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Não há dados para inserir.'
            ]);
        }

        $requiredFields = ['pacienteCdr', 'pacienteNome', 'pacienteDataNascimento', 'pacientePeso', 'pacienteAltura'];
        foreach ($requiredFields as $field) {
            if (!isset($dados[$field])) {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => "Campo obrigatório '$field' não encontrado."
                ]);
            }
        }

        $paciente_model = new PacienteModel();
        $cdr = $dados['pacienteCdr'];

        // Verifica se o CDR já existe
        $pacienteExistente = $paciente_model->where('pacienteCdr', $cdr)->first();

        if ($pacienteExistente) {
            // Se o CDR existe, atualiza o registro
            if ($paciente_model->update($pacienteExistente['pacienteId'], $dados)) {
                return $this->response->setJSON([
                    'success' => true,
                    'message' => 'Paciente atualizado com sucesso!'
                ]);
            } else {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Erro ao atualizar paciente.'
                ]);
            }
        } else {
            // Se o CDR não existe, insere um novo registro
            $idInserido = $paciente_model->insert($dados);

            if ($idInserido) {
                return $this->response->setJSON([
                    'success' => true,
                    'message' => 'Paciente salvo com sucesso!',
                    'pacienteId' => $idInserido  // Retorna o ID do paciente recém-criado
                ]);
            } else {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Erro ao salvar paciente.'
                ]);
            }

        }
    }
    public function carregarPacienteCDR()
    {
        $dados = $this->request->getJSON(true);

        if (!isset($dados['pacienteCdr']) || empty($dados['pacienteCdr'])) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'CDR não fornecido.'
            ]); // Bad Request
        }

        $cdr = $dados['pacienteCdr'];

        $pacienteModel = new PacienteModel();
        $paciente = $pacienteModel->where(PacienteModel::CDR, $cdr)->first();

        if ($paciente) {
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Paciente encontrado',
                'paciente' => $paciente
            ]); // OK
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Paciente não encontrado.'
            ]); // Not Found
        }
    }

    public function salvarGuia() {
        $dados = $this->request->getJSON(true);
        log_message('debug', 'Dados recebidos: ' . print_r($dados, true));
    
        if (empty($dados)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Não há dados para inserir.'
            ]);
        }
    
        // Instancia os Models
        $paciente_model = new PacienteModel();
        $guia_model = new GuiaReferenciaModel();
    
        // Verifica se o paciente já existe pelo CDR
        $cdr = $dados['pacienteCdr'];
        $pacienteExistente = $paciente_model->where('pacienteCdr', $cdr)->first();
    
        if ($pacienteExistente) {
            // Se o paciente já existe, atualiza os dados
            if (!$paciente_model->update($pacienteExistente['pacienteId'], $dados)) {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Erro ao atualizar paciente.'
                ]);
            }
            $pacienteId = $pacienteExistente['pacienteId'];
        } else {
            // Se não existe, cria um novo paciente
            $pacienteId = $paciente_model->insert($dados, true);
    
            if (!$pacienteId) {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Erro ao salvar paciente.'
                ]);
            }
        }
    
        // Adiciona o pacienteId nos dados e salva a guia
        $dados['guiaReferenciaPacienteId'] = $pacienteId;
        $guiaId = $guia_model->insert($dados, true);
    
        if ($guiaId) {
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Guia de referência salva com sucesso!',
                'guiaId' => $guiaId
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Erro ao salvar guia de referência.'
            ]);
        }
    }
    

}
