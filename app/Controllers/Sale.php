<?php

namespace App\Controllers;

use App\Models\ProdutoModel;
use App\Controllers\BaseController;
use App\Models\OrderTicketModel;
use App\Models\ProductOrderModel;
use CodeIgniter\HTTP\ResponseInterface;

class Sale extends BaseController

{
    public function index() {
        $produto_model = new ProdutoModel();
        $produtos = $produto_model->paginate(10);
        

        $data['produtos'] = $produtos;

        $order_ticket_model = new OrderTicketModel();
        $orderTickets = $order_ticket_model->paginate(10);

        $data['orderTickets'] = $orderTickets;
        
        return view('sales/index', $data);        
    }

    public function searchProducts($searching = null) {
        $produto_model = new ProdutoModel();

        if($searching != null) {
            $produtos = $produto_model->like('Nome',$searching.'%')->paginate(10);
        } else {
            $produtos = $produto_model->paginate(10);
        }

        $data['produtos'] = $produtos;
        return $this->response->setJSON($data);
    }

    public function createOrderTicket() {
        $data = $this->request->getVar();
        $model = new OrderTicketModel();
        $model->insert($data);

        return redirect()->to('frentecaixa?=sucessCreateOrderTicket');

    }

    public function searchOrderTicket($searching = null) {
        $orderTicketModel = new OrderTicketModel();

        if($searching != null) {
            $orderTickets = $orderTicketModel->like(OrderTicketModel::CLIENT, $searching.'%')->paginate(10);
        } else {
            $orderTickets = $orderTicketModel->paginate(10);
        }

        $data['orderTickets'] = $orderTickets;
        return $this->response->setJSON($data);

    }

    public function createProductOrder() {
        // Captura as variáveis via GET
        $orderticketid = $this->request->getGet('orderticketid');
        $produtoid     = $this->request->getGet('idproduct');
        $quantity      = $this->request->getGet('quantity');
        $status        = $this->request->getGet('status');

        // Carrega o model do produto
        $produtoModel = new ProdutoModel();
        
        // Busca o produto pelo ID
        $produto = $produtoModel->find($produtoid);
        
        if ($produto) {
            // Prepara os dados para inserir na tabela productorder
            $data = [
                ProductOrderModel::ORDER_TICKET_ID             => $orderticketid,
                ProductOrderModel::NAME           => $produto['Nome'],  // Nome do produto
                ProductOrderModel::UNITY_PRICE    => $produto['Valor'], // Preço do produto
                ProductOrderModel::QUANTITY       => $quantity,
                ProductOrderModel::STATUS         => $status
            ];
            
            // Carrega o model productorder
            $productOrderModel = new ProductOrderModel();
            
            // Insere os dados na tabela productorder
            $productOrderModel->insert($data);
           
        }

        $productOrderModel = new ProductOrderModel();        
        $productOrder = $productOrderModel->where(ProductOrderModel::ORDER_TICKET_ID, $orderticketid )->findAll();
        $data['productOrder'] = $productOrder;
        
        return $this->response->setJSON($data);
    }

    public function listProductOrder($id = null) {
        $productOrderModel = new ProductOrderModel();
        $total = 0;

        if($id != null) {
            $productOrders = $productOrderModel->where(ProductOrderModel::ORDER_TICKET_ID, $id)->findAll();
            
            // Calcula o total do campo 'preco'
            $totalPreco = $productOrderModel->where(ProductOrderModel::ORDER_TICKET_ID, $id)->selectSum(ProductOrderModel::UNITY_PRICE, 'total')->get()->getRow()->total;
            $data['productOrder'] = $productOrders;
            $data['total'] = $totalPreco;
            return $this->response->setJSON($data);
        }     

    }

    public function finish() {
        //Esta funcao sera responsavel por finalizar a ordem de servico
        //ainda nao sei como vou exibir as vendas totais do dia
        //pode ser uma dash, ou um icone, ou um espaco na area de notificacao mostrando a receita de venedas do dia
        //mas ainda nao e certo, vou ter que confirmar isto direito
        
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
