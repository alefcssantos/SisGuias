<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel as Model;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function index()
    {
        $models = $this->getModel()->paginate();
        $data['models'] = $models;
        
        return view('users/index', $data);
    }

    public function create() {
        $dados = $this->request->getVar();
        $model = $this->getModel();
        $model->insert($dados);

        return redirect()->to('/usuarios?alert=successCreate');
    }

    public function read($searching = "null") {
        $model = $this->getModel();

        if($searching != "null") {
            $models = $model->like(Model::NAME,$searching.'%')->paginate(10);
        } else {
            $models = $model->paginate(10);
        }

        $data['models'] = $models;
        
        return view('users/index', $data);        
    }

    public function edit() {
        $dados = $this->request->getVar();
        $model = $this->getModel();
        $model->where(Model::ID, $dados[Model::ID])->set($dados)->update();

        return redirect()->to('/usuarios?alert=successEdit');
    } 

    public function delete($userId) {
        $model = $this->getModel();
        $model->where(Model::ID, $userId)->delete();
        
        return redirect()->to('/usuarios?alert=successDelete');
    }

    private function getModel() {
        return new Model();
    }
}