<?= view('templates/header'); ?>

<!-- -------------- MODAL AGENDAR GUIA -------------- -->
<div class="modal fade" id="modal-agendar" tabindex="-1" role="dialog" aria-labelledby="modalAgendarLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <form id="form-agendar">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAgendarLabel">Agendar Guia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="guiaReferenciaId" name="guiaReferenciaId">

                    <div class="form-group">
                        <label for="data_agendamento">Data de Agendamento</label>
                        <input type="date" class="form-control" id="data_agendamento" name="data_agendamento" required>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Agendar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- -------------- END MODAL -------------- -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Fila P1</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"></a></li>
                        <li class="breadcrumb-item active">Fila P1</li>
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
                            <?= view('templates/especialidades') ?>
                            <div class="row">
                                <div class="col-10">
                                    <div class="input-group input-group-lg">
                                        <input id="search" type="search" class="form-control form-control-lg"
                                            placeholder="Digite o nome do paciente para pesquisar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">CDR</th>
                                        <th class="w-25">Paciente</th>
                                        <th class="w-25">Especialidade</th>
                                        <th style="width: 5%;">IMC</th>
                                        <th style="width: 5%;">Agendar</th>
                                    </tr>
                                </thead>

                                <tbody id="triagemTable">
                                    <?php if (!isset($guias) || empty($guias) || "" === $guias) {
                                        echo "<tr><td colspan='6' class='text-center'>Nenhuma guia para triagem =)</td></tr>";
                                    } else {
                                        foreach ($guias as $guia): ?>
                                    <tr>
                                        <td style="display:none;"><?= esc($guia['guiaReferenciaId']) ?></td>
                                        <td><?= esc($guia['pacienteCdr']) ?></td>
                                        <td><?= esc($guia['pacienteNome']) ?></td>
                                        <td><?= esc($guia['guiaReferenciaEspecialidade']) ?></td>
                                        <td>
                                            <?php
                                                    $imc = 0;
                                            if (!empty($guia['pacientePeso']) && !empty($guia['pacienteAltura'])) {
                                                $altura_m = $guia['pacienteAltura'] / 100; // Convertendo altura para metros
                                                if ($altura_m > 0) {
                                                    $imc = $guia['pacientePeso'] / ($altura_m * $altura_m);
                                                }
                                            }
                                            echo number_format($imc, 2);
                                            ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm ml-2"
                                                onclick="modalAgendar(<?= esc($guia['guiaReferenciaId']) ?>)">
                                                <i class="fas fa-calendar-check"></i>Agendar
                                            </button>

                                        </td>
                                    </tr>
                                    <?php endforeach;
                                    } ?>
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
let searchTimeout; // Para evitar muitas requisições ao mesmo tempo

function pesquisar() {
    clearTimeout(searchTimeout); // Limpa o timeout anterior

    searchTimeout = setTimeout(() => {
        const searchTerm = document.getElementById('search').value;
        const guiaReferenciaEspecialidade = document.getElementById('especialidade').value;

        fetch("/filap1/pesquisar", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    search: searchTerm,
                    guiaReferenciaEspecialidade: guiaReferenciaEspecialidade
                }),
            })
            .then(response => response.json())
            .then(data => {
                const tableBody = document.getElementById('triagemTable');
                tableBody.innerHTML = ""; // Limpa a tabela

                if (data.length === 0) {
                    tableBody.innerHTML =
                        "<tr><td colspan='6' class='text-center'>Nenhuma guia encontrada =(</td></tr>";
                    return;
                }

                data.forEach(guia => {
                    // Calculando o IMC
                    let imc = 0;
                    if (guia.pacientePeso && guia.pacienteAltura) {
                        const alturaM = guia.pacienteAltura /
                            100; // Convertendo altura para metros
                        imc = guia.pacientePeso / (alturaM * alturaM);
                    }

                    // Criando a linha da tabela
                    const row = `
                                        <tr>
                                            <td style="display:none;">${guia.guiaReferenciaId}</td>
                                            <td>${guia.pacienteCdr}</td>
                                            <td>${guia.pacienteNome}</td>
                                            <td>${guia.guiaReferenciaEspecialidade}</td>
                                            <td>${imc ? imc.toFixed(2) : '-'}</td> <!-- IMC calculado -->
                                            <td>${guia.guiaReferenciaStatus}</td>
                                        </tr>
                                    `;

                    // Adicionando a linha ao corpo da tabela
                    tableBody.innerHTML += row;
                });
            })
            .catch(error => console.error("Erro ao buscar guias:", error));
    }, 500); // Aguarda 500ms antes de buscar (evita requisições excessivas)    
}

document.getElementById('search').addEventListener('input', pesquisar);

document.getElementById('especialidade').addEventListener('change', pesquisar);


// Envia a guia seleciona para visualizar a guia, e tbm pode ser editada
// document.querySelectorAll('#triagemTable tr').forEach(row => {
//     row.addEventListener('click', function() {
//         // Obter o guiaReferenciaId da primeira célula
//         const guiaReferenciaId = this.cells[0].textContent.trim(); // Obtém o texto da primeira célula
//         console.log(guiaReferenciaId);

//         // Cria um formulário dinâmico
//         const form = document.createElement('form');
//         form.method = 'POST';
//         form.action = '/triagem/guia'; // URL para onde o formulário será enviado

//         // Cria um campo hidden para enviar o guiaReferenciaId
//         const input = document.createElement('input');
//         input.type = 'hidden';
//         input.name = 'guiaReferenciaId';
//         input.value = guiaReferenciaId;

//         // Adiciona o campo hidden ao formulário
//         form.appendChild(input);

//         // Adiciona o formulário ao body e envia
//         document.body.appendChild(form);
//         form.submit(); // Envia o formulário
//     });
// });

function modalAgendar(id) {
    document.getElementById('guiaReferenciaId').value = id;
    $('#modal-agendar').modal('show');
}

document.getElementById('form-agendar').addEventListener('submit', function(e) {
    e.preventDefault();

    const guiaReferenciaId = document.getElementById('guiaReferenciaId').value;
    const dataAgendamento = document.getElementById('data_agendamento').value;

    // Captura o CSRF do <meta>
    const csrfName = document.querySelector('meta[name="csrf-token-name"]').getAttribute('content');
    const csrfValue = document.querySelector('meta[name="csrf-token-value"]').getAttribute('content');

    const payload = {
        guiaReferenciaId: guiaReferenciaId,
        data_agendamento: dataAgendamento
    };

    // Adiciona o token CSRF ao payload
    payload[csrfName] = csrfValue;

    fetch('/guias/agendar', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify(payload)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Guia agendada com sucesso!');
                $('#modal-agendar').modal('hide');
                location.reload();
            } else {
                alert(data.message || 'Erro ao agendar.');
            }
        })
        .catch(error => {
            console.error('Erro na requisição:', error);
            alert('Erro inesperado.');
        });
});
</script>