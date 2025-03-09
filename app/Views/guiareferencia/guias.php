<?php echo View('templates/header'); ?>

<!-- -------------- MODALS -------------- -->
<div class="modal fade" id="modal-create">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="/clientes/cadastrar" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Novo Cliente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nome</label>
                                <input type="text" class="form-control" name="clientName">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="clientEmail">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Telefone</label>
                                <input type="text" class="form-control" name="clientPhoneNumber">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Endereco</label>
                                <input type="text" class="form-control" name="clientAddress">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Cidade</label>
                                <input type="text" class="form-control" name="clientCity">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Estado</label>
                                <input type="text" class="form-control" name="clientState">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">CEP</label>
                                <input type="text" class="form-control" name="clientPostalCode">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Pais</label>
                                <input type="text" class="form-control" name="clientCountry">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Aniversario</label>
                                <input type="text" class="form-control" name="clientDateBirth">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="/clientes/editar" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Editar Cliente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nome</label>
                                <input type="text" class="form-control" name="clientName">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="clientEmail">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Telefone</label>
                                <input type="text" class="form-control" name="clientPhoneNumber">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Endereco</label>
                                <input type="text" class="form-control" name="clientAddress">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Cidade</label>
                                <input type="text" class="form-control" name="clientCity">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Estado</label>
                                <input type="text" class="form-control" name="clientState">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">CEP</label>
                                <input type="text" class="form-control" name="clientPostalCode">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Pais</label>
                                <input type="text" class="form-control" name="clientCountry">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Aniversario</label>
                                <input type="text" class="form-control" name="clientDateBirth">
                            </div>
                        </div>

                        <input type="hidden" id="modal-editar-produto-ProdutoId" name="ProdutoId">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- -------------- END MODALS -------------- -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Guias</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"></a></li>
                        <li class="breadcrumb-item active">Guias</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="input-group input-group-lg">
                                <input id="search" type="search" class="form-control form-control-lg"
                                    placeholder="Digite o nome do paciente para pesquisar">
                                <div class="input-group-append">
                                    <button class="btn btn-lg btn-default" onclick="searching()">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <button type="button" class="btn btn-info" onclick="dataPrepare()">
                                        <i class="fas fa-plus-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (isset($_GET["alert"]) && $_GET["alert"] == "successCreate"): ?>
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Sucesso! Cliente Cadastrado.</h5>

                        </div>
                    </div>
                </div>
            <?php elseif (isset($_GET['alert']) && $_GET['alert'] == "successDelete"): ?>
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Sucesso! Cliente Excluido.</h5>

                        </div>
                    </div>
                </div>
            <?php elseif (isset($_GET['alert']) && $_GET['alert'] == "successEdit"): ?>
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Sucesso! Cliente Editado.</h5>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">CDR</th>
                                        <th class="w-25">Paciente</th>
                                        <th style="width: 5%">CID</th>
                                        <th class="w-25">Especialidade</th>
                                        <th style="width: 5%;">IMC</th>
                                        <th style="width: 5%;">Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <td>1234</td>
                                    <td>Paciente qualquer</td>
                                    <td>k71</td>
                                    <td>Algum exame consulta</td>
                                    <td>160</td>
                                    <td>Triagem</td>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo View('templates/footer'); ?>


<script>
    function dataPrepare() {
        // document.getElementById('modal-editar-produto-ProdutoId').value = ProdutoId;
        // document.getElementById('modal-editar-produto-Nome').value = Nome;
        // document.getElementById('modal-editar-produto-Qtde').value = Qtde;
        // document.getElementById('modal-editar-produto-Valor').value = Valor;

        $('#modal-create').modal('show');
    }

    function searching() {
        var data = document.getElementById('search').value;
        window.location.href = "/clientes/" + data;
    }
</script>