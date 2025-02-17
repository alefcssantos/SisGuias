<?= view('templates/header'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Cadastrar</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="#">Guia de Encaminhamento</a></li>
                        <li class="breadcrumb-item active">Cadastar</li>
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
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Guia de Encaminhamento</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-1">
                                        <label for="exampleInputEmail1">CDR</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="cdr">
                                    </div>
                                    <div class="form-group col-10">
                                        <label for="exampleInputPassword1">Paciente</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Insira o nome do Paciente">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-2">
                                        <label for="exampleInputPassword1">Data de Nascimento</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Insira a data de nascimento do paciente">
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="exampleInputPassword1">Peso</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Insira o peso em kg. Ex: 80">
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="exampleInputPassword1">Altura</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Insira a altura em cm. Ex: 175">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-2">
                                        <label for="exampleInputPassword1">Estabelecimento</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Estabelecimento de Origem">
                                    </div>
                                    <div class="form-group col-1">
                                        <label for="exampleInputPassword1">Prontuario</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Numero">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-3">
                                        <label>Especialidade</label>
                                        <select id="especialidade" class="form-control select2" style="width: 100%;">
                                            <option>Ortopedia</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>

                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            const selectElement = document.getElementById('especialidade');

                                            if (selectElement) {
                                                const choices = new Choices(selectElement, {
                                                    searchEnabled: true, // Habilita a pesquisa
                                                    itemSelectText: '', // Remove o texto de seleção
                                                });

                                                // Adiciona evento para focar no input de pesquisa quando clicar no select
                                                selectElement.addEventListener('click', function() {
                                                    setTimeout(() => {
                                                        const searchInput = document.querySelector('.choices__input');
                                                        if (searchInput) {
                                                            searchInput.focus();
                                                        }
                                                    }, 100);
                                                });
                                            }
                                        });
                                    </script>

                                    <div class="form-group col-12">
                                        <label for="exampleInputPassword1">Quadro clinico</label>
                                        <textarea class="form-control" id="exampleInputPassword1" placeholder="Preencha o quadro clinico do paciente"></textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="exampleInputPassword1">Exames Realizados</label>
                                        <textarea class="form-control" id="exampleInputPassword1" placeholder="Insira os exames realizados"></textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="exampleInputPassword1">Diagnostico</label>
                                        <textarea class="form-control" id="exampleInputPassword1" placeholder="Preencha o diagnostico do paciente"></textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="exampleInputPassword1">Motivo do Encaminhamento</label>
                                        <textarea class="form-control" id="exampleInputPassword1" placeholder="Preencha o motivo do encaminhamento"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2 col-sm-2">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Nivel de Prioridade</label>
                                            <select class="custom-select">
                                                <option>Prioridade 1</option>
                                                <option>Prioridade 2</option>
                                                <option>Prioridade 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-10">
                                        <label for="exampleInputPassword1">Motivo da prioridade</label>
                                        <textarea class="form-control" id="exampleInputPassword1" placeholder="Preencha o motivo da prioridade apenas em caso p2 ou p3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->

            </div>


        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= view('templates/footer'); ?>


<script>
    $(document).ready(function() {
        $('#especialidade').select2({
            placeholder: "Digite para pesquisar...",
            allowClear: false
        }).on('select2:open', function() {
            setTimeout(() => {
                document.querySelector('.select2-search__field').focus();
            }, 50);
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('input', function() {
                this.value = this.value.toUpperCase();
            });
        });
    });

    function prepararDados(ProdutoId, Nome, Qtde, Valor) {
        document.getElementById('modal-editar-produto-ProdutoId').value = ProdutoId;
        document.getElementById('modal-editar-produto-Nome').value = Nome;
        document.getElementById('modal-editar-produto-Qtde').value = Qtde;
        document.getElementById('modal-editar-produto-Valor').value = Valor;

        $('#modal-editar-produto').modal('show');
    }

    function searching() {
        var data = document.getElementById('search').value;
        window.location.href = "/produtos/" + data;
    }
</script>