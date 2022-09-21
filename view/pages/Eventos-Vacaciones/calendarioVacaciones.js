document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendarioVacaciones');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    locale: 'es',
    initialView: 'dayGridMonth',
    events: [
      {
        title: 'Alejandro Ramirez',
        start: '2022-09-01',
        end: '2022-09-05'
      },
      {
        title: 'Humberto Ramos',
        start: '2022-09-19',
        end: '2022-09-23',
        color: 'red'
      },
    ]
  });
  calendar.render();
});