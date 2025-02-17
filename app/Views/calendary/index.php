<?php echo View('templates/header'); ?>
<style>
    .fc-day-today {
        background-color: #FFFDD0 !important;
        /* Cor creme */
    }
</style>

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
                    <h1>Agenda</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Agenda</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="sticky-top mb-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Minhas tarefas</h4>
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
                <div class="col-12 col-md-9">
                    <div class="card card-primary">
                        <div class="card-body p-0">
                            <!-- THE CALENDAR -->
                            <div id="calendar"></div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo view('templates/footer') ?>

<!-- Page specific script -->
<script>
    $(function() {
        /* initialize the external events
         -----------------------------------------------------------------*/
        function ini_events(ele) {
            ele.each(function() {

                // create an Event Object (https://fullcalendar.io/docs/event-object)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                }

                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject)

                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 1070,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0 //  original position after the drag
                })

            })
        }

        ini_events($('#external-events div.external-event'))

        /* initialize the calendar
         -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date()
        var d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear()

        var Calendar = FullCalendar.Calendar;
        var Draggable = FullCalendar.Draggable;

        var containerEl = document.getElementById('external-events');
        var checkbox = document.getElementById('drop-remove');
        var calendarEl = document.getElementById('calendar');

        // initialize the external events
        // -----------------------------------------------------------------

        new Draggable(containerEl, {
            itemSelector: '.external-event',
            eventData: function(eventEl) {
                var title = eventEl.innerText;
                var backgroundColor = window.getComputedStyle(eventEl, null).getPropertyValue(
                    'background-color');
                var borderColor = window.getComputedStyle(eventEl, null).getPropertyValue(
                    'background-color');
                var textColor = window.getComputedStyle(eventEl, null).getPropertyValue('color');

                return {
                    title: title,
                    backgroundColor: backgroundColor,
                    borderColor: borderColor,
                    textColor: textColor
                };
            },

        });

        var calendar = new Calendar(calendarEl, {

            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'personTimeGridDay,timeGridWeek,dayGridMonth',

            },
            height: 'auto',
            themeSystem: 'bootstrap',
            // timeZone: 'America/Sao_Paulo',
            initialView: 'dayGridMonth',
            views: {
                personTimeGridDay: {
                    buttonText: 'dia',
                    type: 'timeGrid',
                    duration: {
                        days: 1
                    },
                    slotLabelInterval: '00:30:00',
                    slotDuration: '00:30:00',
                    slotMinTime: '08:00:00',
                    slotMaxTime: '17:00:00',
                    slotLabelFormat: {
                        hour: '2-digit', // Mantém sempre dois dígitos (ex: 09, 12)
                        minute: '2-digit', // Mostra os minutos
                        hour12: false // Usa o formato 24h (remova para AM/PM)
                    }
                }
            },
            businessHours: [ // Define horários úteis (exclui o horário de almoço)
                {
                    daysOfWeek: [1, 2, 3, 4, 5], // Segunda a Sexta
                    startTime: '08:00', // Início do expediente
                    endTime: '12:00' // Antes do almoço
                },
                {
                    daysOfWeek: [1, 2, 3, 4, 5], // Segunda a Sexta
                    startTime: '13:00', // Após o almoço
                    endTime: '17:00' // Fim do expediente
                }
            ],
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(info) {
                // is the "remove after drop" checkbox checked?
                if (checkbox.checked) {
                    // if so, remove the element from the "Draggable Events" list
                    info.draggedEl.parentNode.removeChild(info.draggedEl);
                }
            },

            eventReceive: function(info) {
                var title = info.event.title;
                var start = info.event.startStr;
                var backgroundColor = info.event.backgroundColor;
                var allDay = info.event.allDay;
                var end = null;

                info.event.remove();

                create(title, backgroundColor, start, allDay).
                then((response) => {
                        console.log('Requisição bem-sucedida. Dados recebidos:', response);
                        calendar.addEvent({
                            id: response,
                            title: title,
                            start: start,
                            allDay: true,
                            backgroundColor: backgroundColor,
                            end: end

                        });
                    })
                    .catch((erro) => {
                        console.error('Erro na requisição AJAX:', erro);
                    });


            },

            eventAdd: function(info) {
                console.log(info.event.id);
            },

            // Callbacks para eventos de arrastar e soltar
            eventDragStart: function(info) {
                console.log('Evento iniciou o arrastar:', info.event.title);
            },
            eventDragStop: function(info) {
                console.log('Evento terminou o arrastar:', info.event.title);
            },
            eventDrop: function(info) {
                console.log('Evento foi solto em uma nova posição:', info.event.id);
                console.log('Nova data:', formateDate(info.event.start));
                console.log('Data final: ', formateDate(info.event.end));
                console.log('Ao longo do dia?? ', info.event.allDay);
                var allDay = info.event.allDay;
                if (!allDay) {
                    allDay = null;
                }
                update(info.event.id, info.event.title, info.event.color, formateDate(info.event.start),
                    formateDate(info.event.end), allDay);
            },
            eventResizeStart: function(info) {
                console.log('Evento iniciou o redimensionamento:', info.event.title);
            },
            eventResizeStop: function(info) {
                console.log('Evento terminou o redimensionamento:', info.event.title);
            },
            eventResize: function(info) {
                console.log('Evento foi redimensionado para uma nova duração:', info.event
                    .title);
                console.log('Nova duração:', info.event.start, ' - ', info.event.end);
                var allDay = info.event.allDay;
                if (!allDay) {
                    allDay = null;
                }
                update(info.event.id, info.event.title, info.event.color, formateDate(info.event.start),
                    formateDate(info.event.end), allDay);
            },
            eventClick: function(info) {
                $('#modal-form').modal('show');
                $('#modal-form #id').text(info.event.id);
                $('#modal-form #title').text(info.event.title);
                $('#modal-form #start').text(info.event.start.toLocaleString());
                info.event.end !== null && $('#modal-form #end').text(info.event.end.toLocaleString());
                $('#modal-form #allDay').text(info.event.allDay ? 'Sim' : 'Não');
                console.log(info.event.allDay);
                document.getElementById('taskId').value = info.event.id;

            },
            locale: "pt-br",
        });

        calendar.render();
        findAll().
        then((response) => {
                calendar.addEventSource(JSON.parse(response));
            })
            .catch((erro) => {
                console.error('Erro na requisição AJAX:', erro);
            });
        // $('#calendar').fullCalendar()

        /* ADDING EVENTS */
        var currColor = '#3c8dbc' //Red by default
        // Color chooser button
        $('#color-chooser > li > a').click(function(e) {
            e.preventDefault()
            // Save color
            currColor = $(this).css('color')
            // Add color effect to button
            $('#add-new-event').css({
                'background-color': currColor,
                'border-color': currColor
            })
        })
        $('#add-new-event').click(function(e) {
            e.preventDefault()
            // Get value and make sure it is not null
            var val = $('#new-event').val()
            if (val.length == 0) {
                return
            }

            // Create events
            var event = $('<div />')
            event.css({
                'background-color': currColor,
                'border-color': currColor,
                'color': '#fff'
            }).addClass('external-event')
            event.text(val)
            $('#external-events').prepend(event)

            // Add draggable funtionality
            ini_events(event)

            // Remove event from text input
            $('#new-event').val('')
        })
    })

    function create(title, color, start, allDay) {
        return new Promise((resolve, reject) => {
            $.ajax({
                url: '<?= base_url('calendario/cadastrar') ?>',
                type: 'POST',
                data: {
                    title: title,
                    color: color,
                    start: start,
                    allDay: allDay
                },
                xhrFields: {
                    withCredentials: true // Isso permite que os cookies da sessão sejam enviados
                },
                success: function(response) {
                    resolve(response); // Resolve a Promise com os dados da resposta
                },
                error: function(xhr, status, error) {
                    reject(error); // Rejeita a Promise com o erro da requisição AJAX
                }
            });
        });
    }

    function update(id, title, color, start, end, allDay) {
        return new Promise((resolve, reject) => {
            $.ajax({
                url: '<?= base_url('calendario/atualizar') ?>',
                type: 'POST',
                data: {
                    id: id,
                    title: title,
                    color: color,
                    start: start,
                    end: end,
                    allDay: allDay
                },
                xhrFields: {
                    withCredentials: true // Isso permite que os cookies da sessão sejam enviados
                },
                success: function(response) {
                    resolve(response); // Resolve a Promise com os dados da resposta
                },
                error: function(xhr, status, error) {
                    reject(error); // Rejeita a Promise com o erro da requisição AJAX
                }
            });
        });
    }

    function findAll() {
        return new Promise((resolve, reject) => {
            $.ajax({
                url: '<?= base_url('calendario/listar') ?>',
                xhrFields: {
                    withCredentials: true // Isso permite que os cookies da sessão sejam enviados
                },
                success: function(response) {
                    resolve(response); // Resolve a Promise com os dados da resposta
                },
                error: function(xhr, status, error) {
                    reject(error); // Rejeita a Promise com o erro da requisição AJAX
                }
            });
        });
    }

    function formateDate(data) {
        if (data !== null) {
            var ano = data.getFullYear();
            var mes = pad(data.getMonth() + 1);
            var dia = pad(data.getDate());
            var hora = pad(data.getHours());
            var minutos = pad(data.getMinutes());
            var segundos = pad(data.getSeconds());

            return ano + '-' + mes + '-' + dia + 'T' + hora + ':' + minutos;
        }
        return null;
    }

    function pad(numero) {
        return numero < 10 ? '0' + numero : numero;
    }
</script>