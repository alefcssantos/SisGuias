<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClientModel;
use CodeIgniter\HTTP\ResponseInterface;

class Clients extends BaseController {
    public function index() {
        //
        return view('clients/list');
    }

    public function list($searching = "null") {
        $client_model = new ClientModel();

        if ($searching != "null") {
            $clients = $client_model->like('clientName', $searching . '%')->paginate(10);
        } else {
            $clients = $client_model->paginate();
        }

        $data['clients'] = $clients;

        return view('clients/list', $data);
    }

    public function create() {
        $data = $this->request->getVar();
        $client_model = new ClientModel();
        $client_model->insert($data);

        return redirect()->to('/clientes?alert=successCreate');
    }

    public function edit() {
        $data = $this->request->getVar();
        $client_model = new ClientModel();
        $client_model->where(ClientModel::ID, $data[ClientModel::ID])->set($data)->update();

        return redirect()->to('/clientes?alert=successEdit');
    }

    public function delte($ClientId) {
        $client_model = new ClientModel();
        $client_model->when(ClientModel::ID, $ClientId)->delete();

        return redirect()->to('/clientes?alert=successDelete');
    }
}
