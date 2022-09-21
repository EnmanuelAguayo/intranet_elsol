document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendarioActVarias');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    locale: 'es',
    initialView: 'dayGridMonth',
    events: [
      {
        title: 'Actividad 1',
        start: '2022-09-21',
        color: 'gray'
      },
      {
        title: 'Actividad 2',
        start: '2022-09-25',
        color: 'red'
      }
    ]
  });
  calendar.render();

});