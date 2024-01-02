<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FullCalendar Test</title>
    <!-- Include FullCalendar CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.min.css" rel="stylesheet">
</head>
<body>

<div id="calendar"> hello</div>

<!-- Include jQuery from CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include FullCalendar JavaScript from CDN -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.min.js"></script>

<script>
$(document).ready(function() {
    $('#calendar').fullCalendar({
        // Your calendar options and events here
    });
});
</script>

</body>
</html>
