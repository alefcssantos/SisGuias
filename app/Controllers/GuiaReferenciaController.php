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

    public function triagemLista()
    {
        $guiaModel = new GuiaReferenciaModel();
        $triagens = $guiaModel
            ->select('pacientes.*, guiareferencias.*')
            ->join('pacientes', 'pacientes.pacienteId = guiareferencias.guiaReferenciaPacienteId')
            ->where('guiareferencias.guiaReferenciaStatus', 'triagem')
            ->findAll();
        return view('guiareferencia/triagem_fila', ['triagens' => $triagens]);
    }

    public function buscarTriagem()
    {
        // Recebe os dados via getJSON()
        $dados = $this->request->getJSON(true);

        if (!isset($dados['search'])) {
            return $this->response->setJSON(['error' => 'Campo de pesquisa ausente'], 400);
        }

        $search = $dados['search'];  // Valor de pesquisa

        $model = new GuiaReferenciaModel();

        // Realiza o inner join e a pesquisa
        $result = $model->select('pacientes.*, guiareferencias.*')
            ->join('pacientes', 'pacientes.pacienteId = guiareferencias.guiaReferenciaPacienteId')
            ->like('pacientes.pacienteNome', '%' . $search . '%')
            ->where('guiareferencias.guiaReferenciaStatus', 'triagem')
            ->findAll();

        // Retorna os dados encontrados no formato JSON
        return $this->response->setJSON($result);
    }


    // Fila P1
    public function filaP1Lista()
    {
        $guiaModel = new GuiaReferenciaModel();
        $guias = $guiaModel
            ->select('pacientes.*, guiareferencias.*')
            ->join('pacientes', 'pacientes.pacienteId = guiareferencias.guiaReferenciaPacienteId')
            ->where('guiareferencias.guiaReferenciaPrioridade', '1')
            ->where('guiareferencias.guiaReferenciaStatus', 'fila')
            ->findAll();
        return view('guiareferencia/fila_p1', ['guias' => $guias]);
    }

    public function buscarFilaP1()
    {
        // Recebe os dados via getJSON()
        $dados = $this->request->getJSON(true);

        if (!isset($dados['search'])) {
            return $this->response->setJSON(['error' => 'Campo de pesquisa ausente'], 400);
        }

        $search = $dados['search'];  // Valor de pesquisa

        $model = new GuiaReferenciaModel();

        // Realiza o inner join e a pesquisa
        $result = $model->select('pacientes.*, guiareferencias.*')
            ->join('pacientes', 'pacientes.pacienteId = guiareferencias.guiaReferenciaPacienteId')
            ->like('pacientes.pacienteNome', $search) // O `like()` já adiciona os '%' automaticamente
            ->where('guiareferencias.guiaReferenciaStatus', 'fila')
            ->where('guiareferencias.guiaReferenciaPrioridade', '1') // Aqui estava o erro, use `where()`
            ->findAll();

        // Retorna os dados encontrados no formato JSON
        return $this->response->setJSON($result);
    }

    // Fila P2
    public function filaP2Lista()
    {
        $guiaModel = new GuiaReferenciaModel();
        $guias = $guiaModel
            ->select('pacientes.*, guiareferencias.*')
            ->join('pacientes', 'pacientes.pacienteId = guiareferencias.guiaReferenciaPacienteId')
            ->where('guiareferencias.guiaReferenciaPrioridade', '1')
            ->where('guiareferencias.guiaReferenciaStatus', 'fila')
            ->findAll();
        return view('guiareferencia/fila_p1', ['guias' => $guias]);
    }

    public function buscarFilaP2()
    {
        // Recebe os dados via getJSON()
        $dados = $this->request->getJSON(true);

        if (!isset($dados['search'])) {
            return $this->response->setJSON(['error' => 'Campo de pesquisa ausente'], 400);
        }

        $search = $dados['search'];  // Valor de pesquisa

        $model = new GuiaReferenciaModel();

        // Realiza o inner join e a pesquisa
        $result = $model->select('pacientes.*, guiareferencias.*')
            ->join('pacientes', 'pacientes.pacienteId = guiareferencias.guiaReferenciaPacienteId')
            ->like('pacientes.pacienteNome', $search) // O `like()` já adiciona os '%' automaticamente
            ->where('guiareferencias.guiaReferenciaStatus', 'fila')
            ->where('guiareferencias.guiaReferenciaPrioridade', '1') // Aqui estava o erro, use `where()`
            ->findAll();

        // Retorna os dados encontrados no formato JSON
        return $this->response->setJSON($result);
    }

    // Fila P3
    public function filaP3Lista()
    {
        $guiaModel = new GuiaReferenciaModel();
        $guias = $guiaModel
            ->select('pacientes.*, guiareferencias.*')
            ->join('pacientes', 'pacientes.pacienteId = guiareferencias.guiaReferenciaPacienteId')
            ->where('guiareferencias.guiaReferenciaPrioridade', '1')
            ->where('guiareferencias.guiaReferenciaStatus', 'fila')
            ->findAll();
        return view('guiareferencia/fila_p1', ['guias' => $guias]);
    }

    public function buscarFilaP3()
    {
        // Recebe os dados via getJSON()
        $dados = $this->request->getJSON(true);

        if (!isset($dados['search'])) {
            return $this->response->setJSON(['error' => 'Campo de pesquisa ausente'], 400);
        }

        $search = $dados['search'];  // Valor de pesquisa

        $model = new GuiaReferenciaModel();

        // Realiza o inner join e a pesquisa
        $result = $model->select('pacientes.*, guiareferencias.*')
            ->join('pacientes', 'pacientes.pacienteId = guiareferencias.guiaReferenciaPacienteId')
            ->like('pacientes.pacienteNome', $search) // O `like()` já adiciona os '%' automaticamente
            ->where('guiareferencias.guiaReferenciaStatus', 'fila')
            ->where('guiareferencias.guiaReferenciaPrioridade', '1') // Aqui estava o erro, use `where()`
            ->findAll();

        // Retorna os dados encontrados no formato JSON
        return $this->response->setJSON($result);
    }

    // Método para buscar guia e paciente pelo guiaReferenciaId
    // Método para buscar guia e paciente pelo guiaReferenciaId (agora via POST)
    public function abrirGuia()
    {
        // Recebe o guiaReferenciaId do POST
        $guiaReferenciaId = $this->request->getPost('guiaReferenciaId');

        // Carrega o model de guia
        $guiaReferenciaModel = new GuiaReferenciaModel();

        // Realiza o INNER JOIN entre as tabelas guiareferencias e pacientes
        $builder = $guiaReferenciaModel->builder();
        $builder->select('pacientes.*, guiareferencias.*');
        $builder->join('pacientes', 'pacientes.pacienteId = guiareferencias.guiaReferenciaPacienteId');
        $builder->where('guiareferencias.guiaReferenciaId', $guiaReferenciaId);
        $query = $builder->get();

        // Verifica se a consulta retornou resultados
        if ($query->getNumRows() > 0) {
            $data = $query->getRow(); // Obtém o resultado como um único objeto

            // Passa os dados para a view e retorna a nova tela
            return view('guiareferencia/triagem_guia', ['guia' => $data]);
            //var_dump($data);
        } else {
            // Caso não encontre, exibe uma mensagem de erro ou redireciona
            return redirect()->to('/guiareferencia')->with('error', 'Guia não encontrada!');
        }
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

    public function salvarGuia()
    {
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

    public function readequarGuia()
    {
        $dados = $this->request->getPost(); // Captura os dados do formulário
        log_message('debug', 'Dados recebidos: ' . print_r($dados, true));

        if (empty($dados)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Não há dados para inserir.'
            ]);
        }

        // Instancia o Model
        $guia_model = new GuiaReferenciaModel();

        // Atualiza os dados no banco de dados
        if ($guia_model->update($dados['guiaReferenciaId'], $dados)) {
            return redirect()->to('/triagem/lista'); // Redireciona para a lista
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Erro ao atualizar guia.'
            ]);
        }
    }

    public function adicionarFila()
    {
        $dados = $this->request->getPost(); // Captura os dados do formulário
        log_message('debug', 'Dados recebidos: ' . print_r($dados, true));

        if (empty($dados)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Não há dados para inserir.'
            ]);
        }

        // Instancia o Model
        $guia_model = new GuiaReferenciaModel();

        // Atualiza os dados no banco de dados
        if ($guia_model->update($dados['guiaReferenciaId'], $dados)) {
            return redirect()->to('/triagem/lista'); // Redireciona para a lista
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Erro ao atualizar guia.'
            ]);
        }
    }


}
