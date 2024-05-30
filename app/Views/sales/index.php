<?php echo View('templates/header');?>
<div class="modal fade" id="modal-form">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="form-model" action="/calendario/excluir" method="post">
                <input type="hidden" id='taskId' name="taskId">
                <div class="modal-header">
                    <h4 id="modal-title" class="modal-title">Detalhes</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <dl class="row">
                        <dt class="col-sm-3">Codigo:</dt>
                        <dd class="col-sm-9" id='id'></dd>

                        <dt class="col-sm-3">Titulo:</dt>
                        <dd class="col-sm-9" id='title'>Titulo nao definido</dd>

                        <dt class="col-sm-3">Data Inicial</dt>
                        <dd class="col-sm-9" id='start'>Data inicial nao definida</dd>

                        <dt class="col-sm-3">Data final</dt>
                        <dd class="col-sm-9" id='end'>Data final nao definida</dd>

                        <dt class="col-sm-3">Tarefa diaria?</dt>
                        <dd class="col-sm-9" id='allDay'>Nao</dd>
                    </dl>
                </div>
                <div class="modal-footer">
                    <button id="button-delete" type="submit" class="btn btn-danger">
                        Apagar</button>
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
        <div class="container-fluid" style="height: 100vh">
            <div class="row" style="height: 100vh">
                <div class="col-12 col-sm-6">
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                                        href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home"
                                        aria-selected="true">Produtos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                        href="#custom-tabs-three-profile" role="tab"
                                        aria-controls="custom-tabs-three-profile" aria-selected="false">Comandas</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel"
                                    aria-labelledby="custom-tabs-three-home-tab">

                                    <div class="input-group">
                                        <input type="search" id="search" class="form-control form-control-lg"
                                            placeholder="Digite para pesquisar um produto">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-lg btn-default" onclick="searching()">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card mt-3">
                                        <div class="card-body table-responsive p-0" style="height: 100%;">
                                            <table class="table table-head-fixed table-striped table-hover text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th class="w-10">ID</th>
                                                        <th class="w-100">Produto</th>
                                                        <th class="w-25">Estoque</th>
                                                        <th class="w-25">Preco</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($produtos as $prod): ?>
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
                                <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel"
                                    aria-labelledby="custom-tabs-three-profile-tab">
                                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra
                                    purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et
                                    ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl
                                    ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus,
                                    elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel"
                                    aria-labelledby="custom-tabs-three-messages-tab">
                                    Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus
                                    volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum.
                                    Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec
                                    augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc.
                                    Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus
                                    efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum.
                                    Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum
                                    metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare
                                    magna.
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel"
                                    aria-labelledby="custom-tabs-three-settings-tab">
                                    Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis
                                    tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque
                                    tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum
                                    consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra.
                                    Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut
                                    nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet
                                    accumsan ex sit amet facilisis.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-body">
                            <h4 class="mg-3">Resumo Venda</h4>
                            <div class="card mt-3">
                            
                                <div class="card-body table-responsive p-0" style="height: 100%;">
                                
                                    <table class="table table-head-fixed table-striped table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="w-10">ID</th>
                                                <th class="w-100">Produto</th>
                                                <th class="w-25">Preco</th>
                                                <th class="w-25">Qtd</th>
                                                <th class="w-25">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>183</td>
                                                <td>Teclado mecanico</td>
                                                <td>R$ 200,00</td>
                                                <td>1</td>
                                                <td><span class="tag tag-success">R$ 200,00</span></td>
                                            </tr>
                                            <tr>
                                                <td>183</td>
                                                <td>Teclado mecanico</td>
                                                <td>R$ 200,00</td>
                                                <td>1</td>
                                                <td><span class="tag tag-success">R$ 200,00</span></td>
                                            </tr>
                                            <tr>
                                                <td>183</td>
                                                <td>Teclado mecanico</td>
                                                <td>R$ 200,00</td>
                                                <td>1</td>
                                                <td><span class="tag tag-success">R$ 200,00</span></td>
                                            </tr>
                                            <tr>
                                                <td>183</td>
                                                <td>Teclado mecanico</td>
                                                <td>R$ 200,00</td>
                                                <td>1</td>
                                                <td><span class="tag tag-success">R$ 200,00</span></td>
                                            </tr>
                                            <tr>
                                                <td>183</td>
                                                <td>Teclado mecanico</td>
                                                <td>R$ 200,00</td>
                                                <td>1</td>
                                                <td><span class="tag tag-success">R$ 200,00</span></td>
                                            </tr>
                                            <tr>
                                                <td>183</td>
                                                <td>Teclado mecanico</td>
                                                <td>R$ 200,00</td>
                                                <td>1</td>
                                                <td><span class="tag tag-success">R$ 200,00</span></td>
                                            </tr>
                                            <tr>
                                            <tr>
                                                <td>183</td>
                                                <td>Teclado mecanico</td>
                                                <td>R$ 200,00</td>
                                                <td>1</td>
                                                <td><span class="tag tag-success">R$ 200,00</span></td>
                                            </tr>
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
                                                <h1>R$ 560,00</h1>
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
var input = document.getElementById("search");

// Adiciona um ouvinte de evento para o evento "keydown"
input.addEventListener("keydown", function(event) {
    // Verifica se a tecla pressionada é a tecla "Enter" (código 13)
    if (event.keyCode === 13) {
        // Executa a ação desejada quando a tecla "Enter" é pressionada
        searching();
        // Aqui você pode chamar uma função para manipular o evento Enter, como enviar um formulário, etc.
    }
});



function searching() {
    var data = document.getElementById('search').value;
    window.location.href = "/frentecaixa/" + data;
}
</script>