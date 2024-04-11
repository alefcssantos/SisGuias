<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
        echo View('login/index');
    }

    public function login() {
        $dado = $this->request->getVar();
        
        $login_model = new LoginModel();

        $login = $login_model->where('Usuario', $dado['Usuario'])
        ->where('Senha', $dado['Senha'])
        ->first();

        if(!empty($login)) {
            return redirect()->to('/produtos/lista');
        } else {
            return redirect()->to('/login?alert=errorLogin');
        }
    }
}
