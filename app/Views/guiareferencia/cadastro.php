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
                                <input type="hidden" id="pacienteId">
                                <div class="row">
                                    <div class="form-group col-1">
                                        <label for="pacienteCdr">CDR</label>
                                        <input type="text" class="form-control" id="pacienteCdr" name="pacienteCdr"
                                            placeholder="CDR">
                                    </div>
                                    <div class="form-group col-10">
                                        <label for="pacienteNome">Paciente</label>
                                        <input type="text" class="form-control" id="pacienteNome" name="pacienteNome"
                                            placeholder="Insira o nome do Paciente">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-2">
                                        <label for="pacienteDataNascimento">Data de Nascimento</label>
                                        <input type="date" class="form-control" id="pacienteDataNascimento"
                                            name="pacienteDataNascimento">
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="pacientePeso">Peso (kg)</label>
                                        <input type="number" class="form-control" id="pacientePeso" name="pacientePeso"
                                            placeholder="Ex: 80" step="0.1">
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="pacienteAltura">Altura (cm)</label>
                                        <input type="number" class="form-control" id="pacienteAltura"
                                            name="pacienteAltura" placeholder="Ex: 175">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-2">
                                        <label for="guiaReferenciaEstabelecimentoOrigem">Estabelecimento</label>
                                        <input type="text" class="form-control" id="guiaReferenciaEstabelecimentoOrigem"
                                            placeholder="Estabelecimento de Origem">
                                    </div>
                                    <div class="form-group col-1">
                                        <label for="guiaReferenciaProntuarioOrigem">Prontuário</label>
                                        <input type="text" class="form-control" id="guiaReferenciaProntuarioOrigem"
                                            placeholder="Número">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-3">
                                        <label>Especialidade</label>
                                        <select id="guiaReferenciaEspecialidade" class="form-control select2"
                                            style="width: 100%;">
                                            <option value="Ortopedia">Ortopedia</option>
                                            <option value="California">California</option>
                                            <option value="Delaware">Delaware</option>
                                            <option value="Tennessee">Tennessee</option>
                                            <option value="Texas">Texas</option>
                                            <option value="Washington">Washington</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="guiaReferenciaQuadroClinico">Quadro clínico</label>
                                        <textarea class="form-control" id="guiaReferenciaQuadroClinico"
                                            placeholder="Preencha o quadro clínico do paciente"></textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="guiaReferenciaExamesRealizados">Exames Realizados</label>
                                        <textarea class="form-control" id="guiaReferenciaExamesRealizados"
                                            placeholder="Insira os exames realizados"></textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="guiaReferenciaDiagnostico">Diagnóstico/CID</label>
                                        <textarea class="form-control" id="guiaReferenciaDiagnostico"
                                            placeholder="Preencha o diagnóstico/CID do paciente"></textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="guiaReferenciaMotivoEncaminhamento">Motivo do Encaminhamento</label>
                                        <textarea class="form-control" id="guiaReferenciaMotivoEncaminhamento"
                                            placeholder="Preencha o motivo do encaminhamento"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2 col-sm-2">
                                        <div class="form-group">
                                            <label>Nível de Prioridade</label>
                                            <select class="custom-select" id="guiaReferenciaPrioridade">
                                                <option value="1">Prioridade 1</option>
                                                <option value="2">Prioridade 2</option>
                                                <option value="3">Prioridade 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-10">
                                        <label for="guiaReferenciaMotivoPrioridade">Motivo da prioridade</label>
                                        <textarea class="form-control" id="guiaReferenciaMotivoPrioridade"
                                            placeholder="Preencha o motivo da prioridade apenas em caso P2 ou P3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer text-right">
                                <button type="button" onclick="salvarGuia()" class="btn btn-primary">Enviar</button>
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
    $(document).ready(function () {
        $('#especialidade').select2({
            placeholder: "Digite para pesquisar...",
            allowClear: false
        }).on('select2:open', function () {
            setTimeout(() => {
                document.querySelector('.select2-search__field').focus();
            }, 50);
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('input', function () {
                this.value = this.value.toUpperCase();
            });
        });
    });

    const csrfMetaTag = document.querySelector('meta[name="csrf-token"]');
    if (csrfMetaTag) {
        const csrfToken = csrfMetaTag.getAttribute('content');
        console.log(csrfToken);  // Verifique o token
    } else {
        console.error("Token CSRF não encontrado!");
        alert("Erro: Token CSRF não encontrado!");
    }


    const input = document.getElementById('pacienteCdr');
    const limiteCaracteres = 4; // Defina o limite de caracteres desejado

    input.addEventListener('input', function () {
        if (input.value.length >= limiteCaracteres) {
            carregarPaciente(); // Chama a função que faz o fetch
        } else {
            limparPaciente();
        }
    });

    function limparPaciente() {
        document.getElementById("pacienteId").value = "";
        document.getElementById("pacienteNome").value = "";
        document.getElementById("pacienteDataNascimento").value = "";
        document.getElementById("pacientePeso").value = "";
        document.getElementById("pacienteAltura").value = "";
    }

    function limparGuia() {
        document.getElementById("pacienteCdr").value = "";
        document.getElementById("guiaReferenciaEstabelecimentoOrigem").value = "";
        document.getElementById("guiaReferenciaProntuarioOrigem").value = "";
        document.getElementById("guiaReferenciaEspecialidade").value = "";
        document.getElementById("guiaReferenciaQuadroClinico").value = "";
        document.getElementById("guiaReferenciaExamesRealizados").value = "";
        document.getElementById("guiaReferenciaDiagnostico").value = "";
        document.getElementById("guiaReferenciaMotivoEncaminhamento").value = "";
        document.getElementById("guiaReferenciaPrioridade").value = "";
        document.getElementById("guiaReferenciaMotivoPrioridade").value = "";
    }


    async function salvarPaciente() {
        try {
            // Coleta os valores dos inputs
            const pacienteData = {
                pacienteCdr: document.getElementById("pacienteCdr").value,
                pacienteNome: document.getElementById("pacienteNome").value,
                pacienteDataNascimento: document.getElementById("pacienteDataNascimento").value,
                pacientePeso: document.getElementById("pacientePeso").value,
                pacienteAltura: document.getElementById("pacienteAltura").value
            };

            // Verifica os dados que estão sendo enviados
            console.log(pacienteData);

            // Recupera o token CSRF do HTML
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Envia a requisição POST para o controller CodeIgniter
            const response = await fetch("<?= base_url('/paciente/salvar') ?>", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',  // Define que a requisição é AJAX
                    'X-CSRF-TOKEN': csrfToken  // Envia o token CSRF
                },
                body: JSON.stringify(pacienteData)
            });

            // Aguarda a resposta e tenta transformá-la em JSON
            const result = await response.json();

            // Verifica o campo 'success' na resposta JSON
            if (result.success) {
                alert(result.message); // Exibe a mensagem de sucesso
            } else {
                alert("Erro ao salvar paciente: " + result.message); // Exibe a mensagem de erro
            }
        } catch (error) {
            console.error("Erro na requisição:", error);
            alert("Erro ao conectar ao servidor.");
        }
    }

    async function carregarPaciente() {
        try {
            // Coleta os valores dos inputs
            const pacienteData = {
                pacienteCdr: document.getElementById("pacienteCdr").value,
            };

            // Verifica os dados que estão sendo enviados
            console.log(pacienteData);

            // Recupera o token CSRF do HTML
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Envia a requisição POST para o controller CodeIgniter
            const response = await fetch("<?= base_url('/paciente/carregar') ?>", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',  // Define que a requisição é AJAX
                    'X-CSRF-TOKEN': csrfToken  // Envia o token CSRF
                },
                body: JSON.stringify(pacienteData)
            });

            // Aguarda a resposta e tenta transformá-la em JSON
            const result = await response.json();

            console.log(result);

            // Verifica o campo 'success' na resposta JSON
            if (result.success) {
                //alert(result.message); // Exibe a mensagem de sucesso
                document.getElementById("pacienteId").value = result.paciente.pacienteId;
                document.getElementById("pacienteNome").value = result.paciente.pacienteNome;
                document.getElementById("pacienteDataNascimento").value = result.paciente.pacienteDataNascimento;
                document.getElementById("pacientePeso").value = result.paciente.pacientePeso;
                document.getElementById("pacienteAltura").value = result.paciente.pacienteAltura;
                document.getElementById("guiaReferenciaEstabelecimentoOrigem").focus();
            } else {
                alert(result.message); // Exibe a mensagem de erro
            }
        } catch (error) {
            console.error("Erro na requisição:", error);
            alert("Erro ao conectar ao servidor.");
        }
    }

    async function salvarGuia() {
        try {
            // Coleta os valores dos inputs
            const guiaData = {
                // Coleta os dados do paciente
                pacienteId: document.getElementById("pacienteId").value,
                pacienteCdr: document.getElementById("pacienteCdr").value,
                pacienteNome: document.getElementById("pacienteNome").value,
                pacienteDataNascimento: document.getElementById("pacienteDataNascimento").value,
                pacientePeso: document.getElementById("pacientePeso").value,
                pacienteAltura: document.getElementById("pacienteAltura").value,
                // Coleta os valores da guiaReferencia
                guiaReferenciaEstabelecimentoOrigem: document.getElementById("guiaReferenciaEstabelecimentoOrigem").value,
                guiaReferenciaProntuarioOrigem: document.getElementById("guiaReferenciaProntuarioOrigem").value,
                guiaReferenciaEspecialidade: document.getElementById("guiaReferenciaEspecialidade").value,
                guiaReferenciaQuadroClinico: document.getElementById("guiaReferenciaQuadroClinico").value,
                guiaReferenciaExamesRealizados: document.getElementById("guiaReferenciaExamesRealizados").value,
                guiaReferenciaDiagnostico: document.getElementById("guiaReferenciaDiagnostico").value,
                guiaReferenciaMotivoEncaminhamento: document.getElementById("guiaReferenciaMotivoEncaminhamento").value,
                guiaReferenciaPrioridade: document.getElementById("guiaReferenciaPrioridade").value,
                guiaReferenciaMotivoPrioridade: document.getElementById("guiaReferenciaMotivoPrioridade").value
            };

            // Verifica os dados que estão sendo enviados
            console.log("Enviando dados:", guiaData);

            // Envia a requisição POST para o controller CodeIgniter
            const response = await fetch("<?= base_url('/guia/salvar') ?>", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify(guiaData)
            });

            // Aguarda a resposta e tenta transformá-la em JSON
            const result = await response.json();

            // Verifica o campo 'success' na resposta JSON
            if (result.success) {
                alert(result.message); // Exibe a mensagem de sucesso
                limparPaciente();
                limparGuia();
                document.getElementById("pacienteCdr").focus();

            } else {
                alert("Erro ao salvar guia: " + result.message); // Exibe a mensagem de erro
            }
        } catch (error) {
            console.error("Erro na requisição:", error);
            alert("Erro ao conectar ao servidor.");
        }
    }
</script>