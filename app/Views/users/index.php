<?php echo View('templates/header');
use App\Models\UserModel as Model; ?>

<!-- -------------- MODALS: Listar -------------- -->
<div class="modal fade" id="modal-form">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="form-model" action="/usuarios/cadastrar" method="post">
                <div class="modal-header">
                    <h4 id="modal-title" class="modal-title">Novo Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" class="form-control" name="<?= Model::ID ?>">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Nome</label>
                                <input type="text" class="form-control" name="<?= Model::NAME ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="<?= Model::EMAIL ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Função</label>
                                <input type="text" class="form-control" name="<?= Model::JOB ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Telefone</label>
                                <input type="text" class="form-control" name="<?= Model::PHONENUMBER ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Endereço</label>
                                <input type="text" class="form-control" name="<?= Model::ADDRESS ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Nome de usuario</label>
                                <input type="text" class="form-control" name="<?= Model::LOGIN ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Senha</label>
                                <input type="text" class="form-control" name="<?= Model::PASSWORD ?>">
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
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Usuarios</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">Usuarios</li>
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
                                    placeholder="Digite aqui para pesquisar">
                                <div class="input-group-append">
                                    <button class="btn btn-lg btn-default" onclick="searching()">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                        onclick="prepareCreate()">
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
                        <h5><i class="icon fas fa-check"></i> Sucesso! Usuario Cadastrado.</h5>

                    </div>
                </div>
            </div>
            <?php elseif (isset($_GET['alert']) && $_GET['alert'] == "successDelete"): ?>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Sucesso! Usuario Excluido.</h5>

                    </div>
                </div>
            </div>
            <?php elseif (isset($_GET['alert']) && $_GET['alert'] == "successEdit"): ?>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Sucesso! Usuario Editado.</h5>

                    </div>
                </div>
            </div>
            <?php endif; ?>
            <!-- <style>
            @media (max-width: 575.98px) {
                ..table-responsive tbody {
                    display: flex;
                    flex-direction: column;
                }

                .table-responsive tbody th,
                .table-responsive tbody td {
                    display: block;
                    width: 100%;
                    text-align: center;
                    /* ou alinhe como desejar */
                }

            }
            </style> -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Função</th>
                                        <th>Telefone</th>
                                        <th>Endereço</th>
                                        <th>Usuario</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($models as $user): ?>
                                    <tr>
                                        <th scope="row"><?= $user[Model::ID] ?></th>
                                        <td><?= $user[Model::NAME] ?></td>
                                        <td><?= $user[Model::EMAIL] ?></td>
                                        <td><?= $user[Model::JOB] ?></td>
                                        <td><?= $user[Model::PHONENUMBER] ?></td>
                                        <td><?= $user[Model::ADDRESS] ?></td>
                                        <td><?= $user[Model::LOGIN] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning" onclick="prepareUpdate(
                                                        <?= $user[Model::ID] ?>,
                                                       '<?= $user[Model::NAME] ?>',
                                                       '<?= $user[Model::EMAIL] ?>',
                                                       '<?= $user[Model::JOB] ?>',
                                                       '<?= $user[Model::PHONENUMBER] ?>',
                                                       '<?= $user[Model::ADDRESS] ?>',
                                                       '<?= $user[Model::LOGIN] ?>',
                                                       '<?= $user[Model::PASSWORD] ?>'
                                                       )">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <a href="/usuarios/excluir/<?= $user[Model::ID] ?>" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
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
function prepareCreate() {
    document.getElementById('modal-title').textContent = "Novo Usuario";
    document.getElementById('form-model').action = "/usuarios/cadastrar";

    document.querySelector('input[name="<?= Model::ID ?>"]').value = "";
    document.querySelector('input[name="<?= Model::NAME ?>"]').value = "";
    document.querySelector('input[name="<?= Model::EMAIL ?>"]').value = "";
    document.querySelector('input[name="<?= Model::JOB ?>"]').value = "";
    document.querySelector('input[name="<?= Model::PHONENUMBER ?>"]').value = "";
    document.querySelector('input[name="<?= Model::ADDRESS ?>"]').value = "";
    document.querySelector('input[name="<?= Model::LOGIN ?>"]').value = "";
    document.querySelector('input[name="<?= Model::PASSWORD ?>"]').value = "";

    $('#modal-form').modal('show');
}

function prepareUpdate(ID, Nome, Email, Job, PhoneNumber, Address, Login, Password) {
    document.getElementById('modal-title').textContent = "Alterar Usuario";
    document.getElementById('form-model').action = "/usuarios/editar";
    // Aqui você pode fazer o que quiser com os dados recebidos
    // Preencher os campos de entrada com os valores fornecidos
    document.querySelector('input[name="<?= Model::ID ?>"]').value = ID;
    document.querySelector('input[name="<?= Model::NAME ?>"]').value = Nome;
    document.querySelector('input[name="<?= Model::EMAIL ?>"]').value = Email;
    document.querySelector('input[name="<?= Model::JOB ?>"]').value = Job;
    document.querySelector('input[name="<?= Model::PHONENUMBER ?>"]').value = PhoneNumber;
    document.querySelector('input[name="<?= Model::ADDRESS ?>"]').value = Address;
    document.querySelector('input[name="<?= Model::LOGIN ?>"]').value = Login;
    document.querySelector('input[name="<?= Model::PASSWORD ?>"]').value = Password;

    $('#modal-form').modal('show');
}

function searching() {
    var data = document.getElementById('search').value;
    window.location.href = "/usuarios/pesquisar/" + data;
}
</script>