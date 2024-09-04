<?php

use App\Models\OrderTicketModel;

echo View('templates/header'); ?>
<!-- -------------- MODALS: Nova Comanda -------------- -->
<div class="modal fade" id="modal-form-order-ticket">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="form-model" action="/frentecaixa/comandas/cadastrar" method="post">
                <div class="modal-header">
                    <h4 id="modal-title" class="modal-title">Nova Comanda</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" class="form-control" name="<?= OrderTicketModel::ID ?>">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Cliente</label>
                                <input type="text" class="form-control" name="<?= OrderTicketModel::CLIENT ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Detalhes</label>
                                <input type="text" class="form-control" name="<?= OrderTicketModel::DESCRIPTION ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Status</label>
                                <input type="text" class="form-control" name="<?= OrderTicketModel::STATUS ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button id="button-save" type="submit" class="btn btn-primary"><i class="fas fa-save"></i>
                        Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Frente de Caixa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Frente de Caixa</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Produtos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Comandas</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">

                                    <div class="input-group">
                                        <input type="search" id="searchproducts" class="form-control form-control-lg" placeholder="Digite para pesquisar um produto">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-lg btn-default" onclick="searching()">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Tab produtos -->
                                    <div class="card mt-3">
                                        <div class="card-body table-responsive p-0">
                                            <table class="table table-head-fixed table-striped table-hover text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th class="w-10">ID</th>
                                                        <th class="w-100">Produto</th>
                                                        <th class="w-25">Estoque</th>
                                                        <th class="w-25">Preco</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tableproducts">
                                                    <?php foreach ($produtos as $prod) : ?>
                                                        <tr>
                                                            <td><?= $prod['ProdutoId'] ?></td>
                                                            <td><?= $prod['Nome'] ?></td>
                                                            <td><?= $prod['Qtde'] ?></td>
                                                            <td><?= $prod['Valor'] ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                                    <div class="input-group">
                                        <input type="search" id="searchorderticket" class="form-control form-control-lg" placeholder="Digite para pesquisar uma comanda">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-lg btn-default" onclick="searching()">
                                                <i class="fa fa-search"></i>
                                            </button>
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-form-order-ticket">
                                                <i class="fas fa-plus-circle"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card mt-3">
                                        <div class="card-body table-responsive p-0">
                                            <table class="table table-head-fixed table-striped table-hover text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th class="w-10">ID</th>
                                                        <!-- <th class="w-10">Data</th> -->
                                                        <th class="w-100">Cliente</th>
                                                        <!-- <th class="w-25">Descricao</th> -->
                                                        <th class="w-25">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="table-order-ticket">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-body">
                            <input id="order-ticket-id" type="hidden" />
                            <h4 id='order-ticket-name'>Nome da comanda ou frente de caixa</h4>
                            <div class="card">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-head-fixed table-striped table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="w-10">ID</th>
                                                <th class="w-75">Produto</th>
                                                <th class="w-25">Qtd</th>
                                                <th class="w-25">Preço</th>
                                                <th class="w-25">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table-product-order">
                                            <tr>
                                                <td>183</td>
                                                <td>Teclado mecanico</td>
                                                <td>R$ 200,00</td>
                                                <td>1</td>
                                                <td><span class="tag tag-success">R$ 200,00</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body d-flex flex-column align-items-end">
                                            <div>
                                                <p>Total</p>
                                                <h1 id="total">R$ 560,00</h1>
                                            </div>
                                            <button type="button" class="btn btn-info mt-3">
                                                Finalizar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>
<!-- /.col -->

<!-- /.col -->
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo view('templates/footer') ?>



<script>
    function prepareCreateOrderTicket() {
        $('#modal-form-order-ticket').modal('show');
    }    

    document.getElementById('searchproducts').addEventListener('input', function() {
        searchingProducts();
    });

    async function insertProductOrder($idProduct, $quantity, $status) {
        const inputorderticketid = document.getElementById('order-ticket-id');
        // Monta a URL com os parâmetros
        const url = `frentecaixa/produtovenda/inserir?orderticketid=${inputorderticketid.value}&idproduct=${$idProduct}&quantity=${$quantity}&status=${$status}`;
        try {
            const response = await fetch( url, {
                method: 'GET', // ou 'POST', 'PUT', etc.
                headers: {
                    'Content-Type': 'application/json'
                    // Outros cabeçalhos se necessário
                }
            });

            if (!response.ok) {
                throw new Error(`Erro na requisição: ${response.statusText}`);
            }

            const data = await response.json();
            console.log(data);

            // Exibir o resultado no alert
            populateTableProductOrder(data);
            var total = data['total'];
            document.getElementById('total').innerText = formatToRealBR(total);
        } catch (error) {
            console.error('Erro:', error);
            alert('Erro ao buscar os dados');
            const tableBody = document.getElementById('tableproducts');

            // Limpa o conteúdo anterior da tabela
            tableBody.innerHTML = '';
        }        
    }

    async function searchingProducts() {
        try {
            const response = await fetch('frentecaixa/produtos/' + document.getElementById('searchproducts').value, {
                method: 'GET', // ou 'POST', 'PUT', etc.
                headers: {
                    'Content-Type': 'application/json'
                    // Outros cabeçalhos se necessário
                }
            });

            if (!response.ok) {
                throw new Error(`Erro na requisição: ${response.statusText}`);
            }

            const data = await response.json();
            console.log(data);

            // Exibir o resultado no alert
            populateTableProducts(data);
        } catch (error) {
            console.error('Erro:', error);
            alert('Erro ao buscar os dados');
            const tableBody = document.getElementById('tableproducts');

            // Limpa o conteúdo anterior da tabela
            tableBody.innerHTML = '';
        }
    }

    function populateTableProducts(data) {
        const tableBody = document.getElementById('tableproducts');

        // Limpa o conteúdo anterior da tabela
        tableBody.innerHTML = '';

        data.produtos.forEach(product => {
            const row = document.createElement('tr');

            row.onclick = function() {
                insertProductOrder(product.ProdutoId, 1, 'Aguardando');
            };

            const idCell = document.createElement('td');
            idCell.textContent = product.ProdutoId;
            row.appendChild(idCell);

            const nameCell = document.createElement('td');
            nameCell.textContent = product.Nome;
            row.appendChild(nameCell);

            const qtdeCell = document.createElement('td');
            qtdeCell.textContent = product.Qtde;
            row.appendChild(qtdeCell);

            const valorCell = document.createElement('td');
            valorCell.textContent = product.Valor;
            row.appendChild(valorCell);

            tableBody.appendChild(row);
        });
    }

    function populateTableProductOrder(data) {
        const tableBody = document.getElementById('table-product-order');

        // Limpa o conteúdo anterior da tabela
        tableBody.innerHTML = '';

        data.productOrder.forEach(productOrder => {
            const row = document.createElement('tr');

            row.onclick = function() {
                //evento do onlcick
            };

            const idCell = document.createElement('td');
            idCell.textContent = productOrder.productOrderId;
            row.appendChild(idCell);

            const nameCell = document.createElement('td');
            nameCell.textContent = productOrder.productOrderName;
            row.appendChild(nameCell);

            const qtdeCell = document.createElement('td');
            qtdeCell.textContent = productOrder.productOrderQuantity;
            row.appendChild(qtdeCell);

            const valorCell = document.createElement('td');
            valorCell.textContent = formatToRealBR( productOrder.productOrderUnityPrice);
            row.appendChild(valorCell);

            const totalCell = document.createElement('td');
            totalCell.textContent = formatToRealBR( calcularTotal(productOrder.productOrderQuantity, productOrder.productOrderUnityPrice));
            row.appendChild(totalCell);

            tableBody.appendChild(row);
        });
    }

    // Adiciona o sevento ao input de busca orderticket
    document.getElementById('searchorderticket').addEventListener('input', function() {
        searchingOrderTicket();
    });

    function populateTableOrderTicket(data) {
        const tableBody = document.getElementById('table-order-ticket');
        const h4name = document.getElementById('order-ticket-name');
        const inputorderticketid = document.getElementById('order-ticket-id');

        // Limpa o conteúdo anterior da tabela
        tableBody.innerHTML = '';

        data.orderTickets.forEach(ticket => {
            const row = document.createElement('tr');
            row.onclick = function() {
                h4name.innerText = ticket.orderTicketClient;
                inputorderticketid.value = ticket.orderTicketId;
                showProductOrder(ticket.orderTicketId);
            };

            const idCell = document.createElement('td');
            idCell.textContent = ticket.orderTicketId;
            row.appendChild(idCell);

            // const dateCell = document.createElement('td');
            // dateCell.textContent = ticket.orderTicketDate;
            // row.appendChild(dateCell);

            const clientCell = document.createElement('td');
            clientCell.textContent = ticket.orderTicketClient;
            row.appendChild(clientCell);

            // const descriptionCell = document.createElement('td');
            // descriptionCell.textContent = ticket.orderTicketDescription;
            // row.appendChild(descriptionCell);

            const statusCell = document.createElement('td');
            statusCell.textContent = ticket.orderTicketStatus;
            row.appendChild(statusCell);

            tableBody.appendChild(row);
        });
    }

    async function searchingOrderTicket() {
        try {
            const response = await fetch('frentecaixa/comandas/pesquisar/' + document.getElementById('searchorderticket').value, {
                method: 'GET', // ou 'POST', 'PUT', etc.
                headers: {
                    'Content-Type': 'application/json'
                    // Outros cabeçalhos se necessário
                }
            });

            if (!response.ok) {
                throw new Error(`Erro na requisição: ${response.statusText}`);
            }

            const data = await response.json();
            console.log(data);

            // Exibir o resultado no alert
            populateTableOrderTicket(data);
        } catch (error) {
            console.error('Erro:', error);
            const tableBody = document.getElementById('tableproducts');

            // Limpa o conteúdo anterior da tabela
            tableBody.innerHTML = '';
            alert('Erro ao buscar os dados para: ' + document.getElementById('searchorderticket').value);
        }
    }

    async function showProductOrder($id) {
        try {
            const response = await fetch('frentecaixa/produtovenda/listar/' + $id , {
                method: 'GET', // ou 'POST', 'PUT', etc.
                headers: {
                    'Content-Type': 'application/json'
                    // Outros cabeçalhos se necessário
                }
            });

            if (!response.ok) {
                throw new Error(`Erro na requisição: ${response.statusText}`);
            }

            const data = await response.json();
            console.log(data);

            // Exibir o resultado no alert
            populateTableProductOrder(data);
            var total = data['total'];
            document.getElementById('total').innerText = formatToRealBR(total);

        } catch (error) {
            console.error('Erro:', error);
            const tableBody = document.getElementById('tableproducts');

            // Limpa o conteúdo anterior da tabela
            tableBody.innerHTML = '';
            alert('Erro ao buscar os dados para: ' + document.getElementById('searchorderticket').value);
        }
    }

    function formatToRealBR(valor) {
    return new Intl.NumberFormat('pt-BR', {
        style: 'currency',
        currency: 'BRL'
    }).format(valor);
    }

    function calcularTotal($quantity, $price) {
            const valor = parseFloat($price.replace(',', '.'));
            const quantidade = parseInt($quantity);

            // Multiplicação e arredondamento para 2 casas decimais
            const total = (valor * quantidade).toFixed(2);

            return total;
        }

    

    searchingOrderTicket();
    searchingProducts();

    

    
</script>