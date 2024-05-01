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

    <style>
    .creme {
        background-color: #fffdd0; /* Aqui, #f5f5dc é um exemplo de código de cor hexadecimal para creme */
        padding: 20px;
        border: 1px solid #ddd; /* Adicione uma borda para destacar a div */
    }
</style>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid" style="height: 100vh">
            <div class="row" style="height: 100vh">
                <div class="col-md-6 card">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs nav-fill" id="custom-tabs-four-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                                    href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home"
                                    aria-selected="true">Frente de caixa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                    href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile"
                                    aria-selected="false">Comandas</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body creme">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                                aria-labelledby="custom-tabs-four-home-tab">
                                <form action="simple-results.html">
                                    <div class="input-group">
                                        <input type="search" class="form-control form-control-lg"
                                            placeholder="Digite para pesquisar um produto">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-lg btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
                                                <tr>
                                                    <td>183</td>
                                                    <td>John Doe</td>
                                                    <td>11-7-2014</td>
                                                    <td><span class="tag tag-success">Approved</span></td>
                                                </tr>
                                                <tr>
                                                    <td>219</td>
                                                    <td>Alexander Pierce</td>
                                                    <td>11-7-2014</td>
                                                    <td><span class="tag tag-warning">Pending</span></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>657</td>
                                                    <td>Bob Doe</td>
                                                    <td>11-7-2014</td>
                                                    <td><span class="tag tag-primary">Approved</span></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>175</td>
                                                    <td>Mike Doe</td>
                                                    <td>11-7-2014</td>
                                                    <td><span class="tag tag-danger">Denied</span></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>134</td>
                                                    <td>Jim Doe</td>
                                                    <td>11-7-2014</td>
                                                    <td><span class="tag tag-success">Approved</span></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>494</td>
                                                    <td>Victoria Doe</td>
                                                    <td>11-7-2014</td>
                                                    <td><span class="tag tag-warning">Pending</span></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>832</td>
                                                    <td>Michael Doe</td>
                                                    <td>11-7-2014</td>
                                                    <td><span class="tag tag-primary">Approved</span></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>982</td>
                                                    <td>Rocky Doe</td>
                                                    <td>11-7-2014</td>
                                                    <td><span class="tag tag-danger">Denied</span></td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                Aqui vai ficar a lista de produtos
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                aria-labelledby="custom-tabs-four-profile-tab">
                                Aqui vai ficar as comandas abertas e comandas para adicionar
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.col -->

                <div class="col-md-6">
                    <div class="sticky-top mb-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Registrador</h4>
                            </div>
                            <div class="card-body">
                                <!-- the events -->
                                <div id="external-events">
                                    <div id="10" class="external-event bg-success">Almocar</div>
                                    <div class="external-event bg-warning">Voltar para casa</div>
                                    <div class="external-event bg-info">Trabalho para casa</div>
                                    <div class="external-event bg-primary">Trabalhar na Ux</div>
                                    <div class="external-event bg-danger">Tirar um soneca</div>
                                    <div class="checkbox">
                                        <label for="drop-remove">
                                            <input type="checkbox" id="drop-remove">
                                            Remover apos soltar?
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Criar tarefa</h3>
                            </div>
                            <div class="card-body">
                                <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                    <ul class="fc-color-picker" id="color-chooser">
                                        <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                                        <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                                        <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                                        <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                                        <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /btn-group -->
                                <div class="input-group">
                                    <input id="new-event" type="text" class="form-control" placeholder="Titulo">

                                    <div class="input-group-append">
                                        <button id="add-new-event" type="button"
                                            class="btn btn-primary">Adicionar</button>
                                    </div>
                                    <!-- /btn-group -->
                                </div>
                                <!-- /input-group -->
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