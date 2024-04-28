<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Scrum\TaskModel as Model;
use CodeIgniter\HTTP\ResponseInterface;

class Calendary extends BaseController
{
    public function index()
    {
        // $models = $this->getModel()->paginate();
        // $data['models'] = $models;
        
        // return view('calendario/index', $data);
        return view('calendary/index');
    }

    public function read() {
        $models = $this->getModel()->findAll();
        return json_encode($models);
    }

    public function create() {
        
        $dados = $this->request->getVar();
        $model = $this->getModel();
        $model->insert($dados);

        $id = $model->insertID();

        return "$id";
    }

    public function edit() {
        $dados = $this->request->getVar();
        $model = $this->getModel();
        $model->where(Model::ID, $dados[Model::ID])->set($dados)->update();

        //return redirect()->to('/usuarios?alert=successEdit');
    }

    public function delete($userId) {
        $model = $this->getModel();
        $model->where(Model::ID, $userId)->delete();
        
        //return redirect()->to('/usuarios?alert=successDelete');
    }

    private function getModel() {
        return new Model();
    }
}
