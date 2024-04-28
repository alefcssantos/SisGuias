 <!-- Main Footer -->
 <footer class="main-footer">
     <!-- To the right -->
     <div class="float-right d-none d-sm-inline">
         Anything you want
     </div>
     <!-- Default to the left -->
     <strong>Copyright &copy; 2014-2021 <a href="https://alefdev.com.br">AlefDev</a>.</strong> All rights reserved.
 </footer>
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
 <script src="<?= base_url('theme') ?>/plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap -->
 <script src="<?= base_url('theme') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- jQuery UI -->
 <script src="<?= base_url('theme') ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- AdminLTE App -->
 <script src="<?= base_url('theme') ?>/dist/js/adminlte.min.js"></script>
 <!-- fullCalendar 2.2.5 -->
 <!-- <script src="<?= base_url('theme') ?>/plugins/moment/moment.min.js"></script> -->
 <script src="<?= base_url('theme') ?>/plugins/fullcalendar/main.js"></script>
 <!-- <script src="<?= base_url('theme') ?>/plugins/fullCalendar/locales-all.min.js"></script> -->
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
            right: 'dia,timeGridWeek,dayGridMonth',
        },
        themeSystem: 'bootstrap',
        // timeZone: 'America/Sao_Paulo',
        views: {
            dia: {
                type: 'timeGrid',
                duration: {
                    days: 3
                },
                slotLabelInterval: '00:30:00',
                slotDuration: '00:30:00',
                slotMinTime: '07:00:00',
                slotMaxTime: '16:00:00',
            }
        },

        // //Random default events
        // events: [{
        //         title: 'All Day Event',
        //         start: new Date(y, m, 1),
        //         backgroundColor: '#f56954', //red
        //         borderColor: '#f56954', //red
        //         allDay: true
        //     },
        //     {
        //         title: 'Long Event',
        //         start: new Date(y, m, d - 5),
        //         end: new Date(y, m, d - 2),
        //         backgroundColor: '#f39c12', //yellow
        //         borderColor: '#f39c12' //yellow
        //     },
        //     {
        //         title: 'Meeting',
        //         start: new Date(y, m, d, 10, 30),
        //         allDay: false,
        //         backgroundColor: '#0073b7', //Blue
        //         borderColor: '#0073b7' //Blue
        //     },
        //     {
        //         title: 'Lunch',
        //         start: new Date(y, m, d, 12, 0),
        //         end: new Date(y, m, d, 14, 0),
        //         allDay: false,
        //         backgroundColor: '#00c0ef', //Info (aqua)
        //         borderColor: '#00c0ef' //Info (aqua)
        //     },
        //     {
        //         title: 'Birthday Party',
        //         start: new Date(y, m, d + 1, 19, 0),
        //         end: new Date(y, m, d + 1, 22, 30),
        //         allDay: false,
        //         backgroundColor: '#00a65a', //Success (green)
        //         borderColor: '#00a65a' //Success (green)
        //     },
        //     {
        //         title: 'Click for Google',
        //         start: new Date(y, m, 28),
        //         end: new Date(y, m, 29),
        //         url: 'https://www.google.com/',
        //         backgroundColor: '#3c8dbc', //Primary (light-blue)
        //         borderColor: '#3c8dbc' //Primary (light-blue)
        //     }
        // ],
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
            // update(info.event.id, info.event.title, null, formateDate(info.event.start),
            //     formateDate(info.event.end), info.event.allDay);
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
 </body>

 </html>