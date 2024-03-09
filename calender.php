<!DOCTYPE html>
<html>
<head>
  <title>Calendar</title>
  <!-- Include necessary CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" rel="stylesheet" />
  
<link rel="stylesheet" href="fullcalendar.min.css"/>

  <!-- JS for jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- JS for FullCalendar -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
</head>
<body>
  <h1 style="font-family: cambria; color: #234e7c;">Event Calendar</h1>
  <div id="calendar"></div>
  <script>
    $(document).ready(function() {
      $('#calendar').fullCalendar({
        defaultView: 'month',
        events: [
          {
            title: 'Learn to Lead at CUET',
            start: '2023-06-11',
            end: '2023-06-11'
          },
          {
            title: 'Training Workshop on Python and Machine Learning',
            start: '2023-08-01',
            end: '2023-08-01'
          },
          {
            title: 'ECCE 2023',
            start: '2023-02-23',
            end: '2023-02-23'
          },
          {
            title: 'Cuet Career Fest 2023',
            start: '2023-06-01',
            end: '2023-06-04'
          }
        ],
        eventClick: function(calEvent, jsEvent, view) {
          alert(calEvent.title);
        }
      });
    });
  </script>
</body>
</html>
