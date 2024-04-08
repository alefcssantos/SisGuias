<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;
use CodeIgniter\HTTP\ResponseInterface;

class Products extends BaseController
{
    public function list()
    {
        $produto_model = new ProdutoModel();

        $produtos = $produto_model->findAll();

        $data['produtos'] = $produtos;

        echo View('templates/header');
        echo View('products/list', $data);
        echo View('templates/footer');
    }
}
