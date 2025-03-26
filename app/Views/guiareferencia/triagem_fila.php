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
                    <h1 class="m-0">Guias para Triagem</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"></a></li>
                        <li class="breadcrumb-item active">Clientes</li>
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
                                        <th style="width: 5%;">Status</th>
                                    </tr>
                                </thead>

                                <tbody id="triagemTable">
                                    <?php if (!isset($triagens) || empty($triagens) || "" === $triagens) {
                                        echo "<tr><td colspan='6' class='text-center'>Nenhuma guia para triagem =)</td></tr>";
                                    } else {
                                        foreach ($triagens as $triagem): ?>
                                            <tr>
                                                <td style="display:none;"><?= esc($triagem['guiaReferenciaId']) ?></td>
                                                <td><?= esc($triagem['pacienteCdr']) ?></td>
                                                <td><?= esc($triagem['pacienteNome']) ?></td>
                                                <td><?= esc($triagem['guiaReferenciaEspecialidade']) ?></td>
                                                <td>
                                                    <?php
                                                    $imc = 0;
                                            if (!empty($triagem['pacientePeso']) && !empty($triagem['pacienteAltura'])) {
                                                $altura_m = $triagem['pacienteAltura'] / 100; // Convertendo altura para metros
                                                if ($altura_m > 0) {
                                                    $imc = $triagem['pacientePeso'] / ($altura_m * $altura_m);
                                                }
                                            }
                                            echo number_format($imc, 2);
                                            ?>
                                                </td>
                                                <td><?= esc($triagem['guiaReferenciaStatus']) ?></td>
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

    document.getElementById('search').addEventListener('input', function () {
        clearTimeout(searchTimeout); // Limpa o timeout anterior

        searchTimeout = setTimeout(() => {
            const searchTerm = this.value.trim();

            fetch("/triagem/pesquisar", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({ search: searchTerm }),
            })
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.getElementById('triagemTable');
                    tableBody.innerHTML = ""; // Limpa a tabela

                    if (data.length === 0) {
                        tableBody.innerHTML = "<tr><td colspan='6' class='text-center'>Nenhuma guia encontrada =(</td></tr>";
                        return;
                    }

                    data.forEach(guia => {
                        // Calculando o IMC
                        let imc = 0;
                        if (guia.pacientePeso && guia.pacienteAltura) {
                            const alturaM = guia.pacienteAltura / 100; // Convertendo altura para metros
                            imc = guia.pacientePeso / (alturaM * alturaM);
                        }

                        // Criando a linha da tabela
                        const row = `
                                        <tr>
                                            <td style="display:none;">${guia.guiaReferenciaId}</td>
                                            <td>${guia.pacienteCdr}</td>
                                            <td>${guia.pacienteNome}</td>
                                            <td>${guia.guiaReferenciaEspecialidade || '-'}</td>
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
    });

    document.querySelectorAll('#triagemTable tr').forEach(row => {
        row.addEventListener('click', function () {
            // Obter o guiaReferenciaId da primeira célula
            const guiaReferenciaId = this.cells[0].textContent.trim(); // Obtém o texto da primeira célula
            console.log(guiaReferenciaId);

            // Cria um formulário dinâmico
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '/triagem/guia'; // URL para onde o formulário será enviado

            // Cria um campo hidden para enviar o guiaReferenciaId
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'guiaReferenciaId';
            input.value = guiaReferenciaId;

            // Adiciona o campo hidden ao formulário
            form.appendChild(input);

            // Adiciona o formulário ao body e envia
            document.body.appendChild(form);
            form.submit(); // Envia o formulário
        });
    });





</script>