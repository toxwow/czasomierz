import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interaction from '@fullcalendar/interaction';
document.addEventListener('DOMContentLoaded', function() {
    let calendarEl = document.getElementById('calendar');

    let calendar = new Calendar(calendarEl, {
        timeZone: 'local',
        locale: 'pl',
        events: [

        ],

        header: {
            left:   '',
            center: 'prev, title, next',
            right:  '',
        },

        titleFormat: { // will produce something like "Tuesday, September 18, 2018"
            month: 'long',
            year: 'numeric'
        },

        plugins: [ dayGridPlugin, interaction ],
        dateClick: function(info) {
            console.log('Clicked on: ' + info.dateStr);
            console.log('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
            console.log('Current view: ' + info.view.type);
            // change the day's background color just for fun
            // info.dayEl.style.backgroundColor = 'red';
        }

    });


    let userEvents = appSettings;
    userEvents.forEach(passEvent);

    function passEvent(item, index) {
        let obj = {
            id: index,
            start: item['date'], // a property!
            end: item['date'],
            rendering: 'background',
            backgroundColor: '#d36a42'
        }
        calendar.addEvent( obj );
    }

    calendar.render();


    console.log(appSettings);
});




