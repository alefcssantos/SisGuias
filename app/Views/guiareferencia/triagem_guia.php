<?= view('templates/header'); ?>

<!-- -------------- MODALS -------------- -->
<div class="modal fade" id="modal-create">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="/clientes/cadastrar" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Motivo para readequar</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea id="guiaReferenciaMotivoReadequar" type="text" class="form-control"
                                    name="guiaReferenciaMotivoReadequar"
                                    placeholder="Digite aqui o motivo para readequar a guia"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" onclick="cancelar()" class="btn btn-default"
                        data-dismiss="modal">Cancelar</button>
                    <button type="button" onclick="confirmar()" class="btn btn-primary">Confirmar</button>
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
                                <input type="hidden" id="pacienteId" value="<?= $guia->pacienteId; ?>">

                                <div class="row">
                                    <div class="form-group col-1">
                                        <label for="pacienteCdr">CDR</label>
                                        <input type="text" class="form-control" id="pacienteCdr" name="pacienteCdr"
                                            placeholder="CDR" value="<?= $guia->pacienteCdr; ?>" disabled>
                                    </div>
                                    <div class="form-group col-10">
                                        <label for="pacienteNome">Paciente</label>
                                        <input type="text" class="form-control" id="pacienteNome" name="pacienteNome"
                                            placeholder="Insira o nome do Paciente" value="<?= $guia->pacienteNome; ?>"
                                            disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-2">
                                        <label for="pacienteDataNascimento">Data de Nascimento</label>
                                        <input type="date" class="form-control" id="pacienteDataNascimento"
                                            name="pacienteDataNascimento" value="<?= $guia->pacienteDataNascimento; ?>"
                                            disabled>
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="pacientePeso">Peso (kg)</label>
                                        <input type="number" class="form-control" id="pacientePeso" name="pacientePeso"
                                            placeholder="Ex: 80" step="0.1" value="<?= $guia->pacientePeso; ?>"
                                            disabled>
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="pacienteAltura">Altura (cm)</label>
                                        <input type="number" class="form-control" id="pacienteAltura"
                                            name="pacienteAltura" placeholder="Ex: 175"
                                            value="<?= $guia->pacienteAltura; ?>" disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <input type="hidden" id="guiaReferenciaId" value="<?= $guia->guiaReferenciaId; ?>">
                                    <div class="form-group col-2">
                                        <label for="guiaReferenciaEstabelecimentoOrigem">Estabelecimento</label>
                                        <input type="text" class="form-control" id="guiaReferenciaEstabelecimentoOrigem"
                                            value="<?= $guia->guiaReferenciaEstabelecimentoOrigem; ?>" disabled>
                                    </div>
                                    <div class="form-group col-1">
                                        <label for="guiaReferenciaProntuarioOrigem">Prontuário</label>
                                        <input type="text" class="form-control" id="guiaReferenciaProntuarioOrigem"
                                            value="<?= $guia->guiaReferenciaProntuarioOrigem; ?>" disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-3">
                                        <label>Especialidade</label>
                                        <select id="guiaReferenciaEspecialidade" class="form-control select2"
                                            style="width: 100%;" disabled>
                                            <option value="Ortopedia"
                                                <?= ($guia->guiaReferenciaEspecialidade == 'Ortopedia') ? 'selected' : ''; ?>>Ortopedia</option>
                                            <option value="California"
                                                <?= ($guia->guiaReferenciaEspecialidade == 'California') ? 'selected' : ''; ?>>California</option>
                                            <option value="Delaware" <?= ($guia->guiaReferenciaEspecialidade == 'Delaware') ? 'selected' : ''; ?>>Delaware</option>
                                            <option value="Tennessee"
                                                <?= ($guia->guiaReferenciaEspecialidade == 'Tennessee') ? 'selected' : ''; ?>>Tennessee</option>
                                            <option value="Texas" <?= ($guia->guiaReferenciaEspecialidade == 'Texas') ? 'selected' : ''; ?>>Texas</option>
                                            <option value="Washington"
                                                <?= ($guia->guiaReferenciaEspecialidade == 'Washington') ? 'selected' : ''; ?>>Washington</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="guiaReferenciaQuadroClinico">Quadro clínico</label>
                                        <textarea class="form-control" id="guiaReferenciaQuadroClinico"
                                            disabled><?= $guia->guiaReferenciaQuadroClinico; ?></textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="guiaReferenciaExamesRealizados">Exames Realizados</label>
                                        <textarea class="form-control" id="guiaReferenciaExamesRealizados"
                                            disabled><?= $guia->guiaReferenciaExamesRealizados; ?></textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="guiaReferenciaDiagnostico">Diagnóstico</label>
                                        <textarea class="form-control" id="guiaReferenciaDiagnostico"
                                            disabled><?= $guia->guiaReferenciaDiagnostico; ?></textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="guiaReferenciaMotivoEncaminhamento">Motivo do Encaminhamento</label>
                                        <textarea class="form-control" id="guiaReferenciaMotivoEncaminhamento"
                                            disabled><?= $guia->guiaReferenciaMotivoEncaminhamento; ?></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2 col-sm-2">
                                        <div class="form-group">
                                            <label>Nível de Prioridade</label>
                                            <select class="custom-select" id="guiaReferenciaPrioridade" disabled>
                                                <option value="1" <?= ($guia->guiaReferenciaPrioridade == '1') ? 'selected' : ''; ?>>Prioridade 1</option>
                                                <option value="2" <?= ($guia->guiaReferenciaPrioridade == '2') ? 'selected' : ''; ?>>Prioridade 2</option>
                                                <option value="3" <?= ($guia->guiaReferenciaPrioridade == '3') ? 'selected' : ''; ?>>Prioridade 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-10">
                                        <label for="guiaReferenciaMotivoPrioridade">Motivo da prioridade</label>
                                        <textarea class="form-control" id="guiaReferenciaMotivoPrioridade"
                                            disabled><?= $guia->guiaReferenciaMotivoPrioridade; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-right">
                                <button type="button" onclick="readequar()" class="btn btn-primary">Readequar</button>
                                <button type="button" onclick="adicionar()" class="btn btn-primary">Adicionar na
                                    Fila</button>
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
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('input', function () {
                this.value = this.value.toUpperCase();
            });
        });
    });

    function confirmar() {
        try {
            // Criar um formulário dinamicamente
            const form = document.createElement("form");
            form.method = "POST";
            form.action = "<?= base_url('/triagem/readequar') ?>";

            // Recupera o token CSRF
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Adiciona o token CSRF ao formulário
            const csrfInput = document.createElement("input");
            csrfInput.type = "hidden";
            csrfInput.name = "csrf_token";
            csrfInput.value = csrfToken;
            form.appendChild(csrfInput);

            // Coleta os valores dos inputs e adiciona ao formulário
            const fields = [
                { name: "guiaReferenciaId", value: document.getElementById("guiaReferenciaId").value },
                { name: "guiaReferenciaMotivoReadequar", value: document.getElementById("guiaReferenciaMotivoReadequar").value },
                { name: "guiaReferenciaStatus", value: "readequar" }
            ];

            fields.forEach(field => {
                const input = document.createElement("input");
                input.type = "hidden";
                input.name = field.name;
                input.value = field.value;
                form.appendChild(input);
            });

            // Adiciona o formulário ao corpo e o submete
            document.body.appendChild(form);
            form.submit();

        } catch (error) {
            console.error("Erro na requisição:", error);
            alert("Erro ao conectar ao servidor.");
        }
    }

    function adicionar() {
        try {
            // Criar um formulário dinamicamente
            const form = document.createElement("form");
            form.method = "POST";
            form.action = "<?= base_url('/triagem/readequar') ?>";

            // Recupera o token CSRF
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Adiciona o token CSRF ao formulário
            const csrfInput = document.createElement("input");
            csrfInput.type = "hidden";
            csrfInput.name = "csrf_token";
            csrfInput.value = csrfToken;
            form.appendChild(csrfInput);

            // Coleta os valores dos inputs e adiciona ao formulário
            const fields = [
                { name: "guiaReferenciaId", value: document.getElementById("guiaReferenciaId").value },
                { name: "guiaReferenciaStatus", value: "fila" }
            ];

            fields.forEach(field => {
                const input = document.createElement("input");
                input.type = "hidden";
                input.name = field.name;
                input.value = field.value;
                form.appendChild(input);
            });

            // Adiciona o formulário ao corpo e o submete
            document.body.appendChild(form);
            form.submit();

        } catch (error) {
            console.error("Erro na requisição:", error);
            alert("Erro ao conectar ao servidor.");
        }
    }


    function cancelar() {
        $('#modal-create').modal('hidden');
    }

    function readequar() {
        $('#modal-create').modal('show');
    }
</script>