<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;
use CodeIgniter\HTTP\ResponseInterface;

class Products extends BaseController
{
    public function list() {
        $produto_model = new ProdutoModel();

        $produtos = $produto_model->findAll();

        $data['produtos'] = $produtos;

        echo View('templates/header');
        echo View('products/list', $data);
        echo View('templates/footer');
    }

    public function create() {
        $dados = $this->request->getVar();
        $produto_model = new ProdutoModel();
        $produto_model->insert($dados);

        return redirect()->to('/produtos/lista?alert=successCreate');
    }

    public function edit() {
        $dados = $this->request->getVar();
        $produto_model = new ProdutoModel();
        $produto_model->where('ProdutoId', $dados['ProdutoId'])->set($dados)->update();

        return redirect()->to('/produtos/lista?alert=successEdit');
    } 

    public function delete($ProdutoId) {
        $produto_model = new ProdutoModel();
        $produto_model->where('ProdutoId', $ProdutoId)->delete();

        return redirect()->to('/produtos/lista?alert=successDelete');
    }
}