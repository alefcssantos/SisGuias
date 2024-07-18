<?php

namespace App\Controllers;

use App\Models\ProdutoModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Sale extends BaseController
{
    public function index() {
        $produto_model = new ProdutoModel();
        $produtos = $produto_model->paginate(10);
        

        $data['produtos'] = $produtos;
        
        return view('sales/index', $data);        
    }

    public function searchProducts($searching = null) {
        $produto_model = new ProdutoModel();

        if($searching != "null") {
            $produtos = $produto_model->like('Nome',$searching.'%')->paginate(10);
        } else {
            $produtos = $produto_model->paginate(10);
        }

        $data['produtos'] = $produtos;
        return $this->response->setJSON($data);
    }

    public function searchOrderTicket($searching = null) {

    }

    public function readOrderTicket($id = null) {

    }

    public function createProductToOrderTicket($id = null) {

    }

    public function removeProcutToOrderTicket($id = null) {

    }

    public function create() {
        $dados = $this->request->getVar();
        $produto_model = new ProdutoModel();
        $produto_model->insert($dados);

        return redirect()->to('/produtos?alert=successCreate');
    }

    public function edit() {
        $dados = $this->request->getVar();
        $produto_model = new ProdutoModel();
        $produto_model->where('ProdutoId', $dados['ProdutoId'])->set($dados)->update();

        return redirect()->to('/produtos?alert=successEdit');
    } 

    public function delete($ProdutoId) {
        $produto_model = new ProdutoModel();
        $produto_model->where('ProdutoId', $ProdutoId)->delete();

        return redirect()->to('/produtos?alert=successDelete');
    }
}
