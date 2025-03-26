<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LoginModel;

class Login extends BaseController {
    public function index() {
        // Check User Session
        if (session()->has('Usuario')) {
            return redirect()->to("/");
        } else {
            return view('login/index');
        }
    
    }

    public function authentication() {

        // Validar dados de entrada
        $validated = $this->validate([
            'Usuario' => 'required',
            'Senha' => 'required',
        ]);

        if ($validated) {
            $dado = $this->request->getVar();
            $login_model = new LoginModel();

            $login = $login_model
                ->where('Usuario', $dado['Usuario'])
                ->where('Senha', $dado['Senha'])
                ->first();

            if (!empty($login)) {
                session()->set('LoginId', $login['LoginId']);
                session()->set('Usuario', $dado['Usuario']);
                return redirect()->to('/');
            } else {
                return redirect()->to('/login?alert=errorLogin');
            }

        } else {
            return redirect()->to('/login?alert=errorLogin');
        }


    }

    public function logout() {
        session()->destroy();
        session()->start();
        return view('login/index');
    }
}
