<?php
    require_once '../controller/eventC.php';

    if (isset($_POST['event_id'])) {
        $event_id = $_POST['event_id'];
        $eventC = new eventC();
        $eventC->delete_event($event_id);
        echo "Event with ID $event_id has been deleted";
    }
?>

<form method="post" action="">
    <label for="event_id">Event ID:</label>
    <input type="text" name="event_id" id="event_id">
    <button type="submit">Delete</button>
</form>