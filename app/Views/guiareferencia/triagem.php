<?= view('templates/header'); ?>

<!-- -------------- MODALS -------------- -->
<div class="modal fade" id="modal-create">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="/clientes/cadastrar" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Motivo da devolução</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea type="text" class="form-control" name="clientName"
                                    placeholder="Digite aqui o motivo da devolução"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
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
                    <h1 class="m-0">Triagem</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Triagem</li>
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
                                        <label for="guiaReferenciaId">CDR</label>
                                        <input type="email" class="form-control" id="guiaReferenciaId" placeholder="cdr"
                                            disabled>
                                    </div>
                                    <div class="form-group col-10">
                                        <label for="guiaReferenciaPacienteId">Paciente</label>
                                        <input type="text" class="form-control" id="guiaReferenciaPacienteId"
                                            placeholder="Insira o nome do Paciente" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-2">
                                        <label for="guiaReferenciaData">Data de Nascimento</label>
                                        <input type="text" class="form-control" id="guiaReferenciaData"
                                            placeholder="Insira a data de nascimento do paciente" disabled>
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="guiaReferenciaPeso">Peso</label>
                                        <input type="text" class="form-control" id="guiaReferenciaPeso"
                                            placeholder="Insira o peso em kg. Ex: 80" disabled>
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="guiaReferenciaAltura">Altura</label>
                                        <input type="text" class="form-control" id="guiaReferenciaAltura"
                                            placeholder="Insira a altura em cm. Ex: 175" disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-2">
                                        <label for="guiaReferenciaEstabelecimentoOrigem">Estabelecimento</label>
                                        <input type="text" class="form-control" id="guiaReferenciaEstabelecimentoOrigem"
                                            placeholder="Estabelecimento de Origem" disabled>
                                    </div>
                                    <div class="form-group col-1">
                                        <label for="guiaReferenciaProntuarioOrigem">Prontuario</label>
                                        <input type="text" class="form-control" id="guiaReferenciaProntuarioOrigem"
                                            placeholder="Numero" disabled>
                                    </div>
                                </div>

                                <?= view('templates/especialidades'); ?>

                                <div class="form-group col-12">
                                    <label for="guiaReferenciaQuadroClinico">Quadro clinico</label>
                                    <textarea class="form-control" id="guiaReferenciaQuadroClinico"
                                        placeholder="Preencha o quadro clinico do paciente" disabled></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label for="guiaReferenciaExamesRealizados">Exames Realizados</label>
                                    <textarea class="form-control" id="guiaReferenciaExamesRealizados"
                                        placeholder="Insira os exames realizados" disabled></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label for="guiaReferenciaDiagnostico">Diagnostico</label>
                                    <textarea class="form-control" id="guiaReferenciaDiagnostico"
                                        placeholder="Preencha o diagnostico do paciente" disabled></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label for="guiaReferenciaMotivoEncaminhamento">Motivo do Encaminhamento</label>
                                    <textarea class="form-control" id="guiaReferenciaMotivoEncaminhamento"
                                        placeholder="Preencha o motivo do encaminhamento" disabled></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label for="guiaReferenciaPrioridade">Nivel de Prioridade</label>
                                        <select class="custom-select" id="guiaReferenciaPrioridade">
                                            <option>Prioridade 1</option>
                                            <option>Prioridade 2</option>
                                            <option>Prioridade 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label for="guiaReferenciaMotivoPrioridade">Motivo da Prioridade</label>
                                    <textarea class="form-control" id="guiaReferenciaMotivoPrioridade"
                                        placeholder="Preencha o motivo da prioridade"></textarea>
                                </div>
                            </div>
                        </form>

                        <div class="card-footer text-right">
                            <button onclick="readequar()" class="btn btn-primary">Readequar</button>
                            <button class="btn btn-primary">Adicionar na Fila</button>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
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

function readequar() {
    $('#modal-create').modal('show');
}
</script>