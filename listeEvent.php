<?php
    require_once '../model/event.php';
    require_once '../controller/eventC.php';
    
    // define a variable to store the event object
    $event = null;
    
    // check if the form has been submitted
    if (isset($_POST['event_id'])) {
        // get the event ID from the form
        $event_id = $_POST['event_id'];
        
        // create an instance of the event controller
        $eventC = new eventC();
        
        // use the findEvent method to retrieve the event by its ID
        $event = $eventC->findEvent($event_id);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Event</title>
</head>
<body>
    <h1>Find Event by ID</h1>
    
    <form method="post" action="">
        <label for="event_id">Event ID:</label>
        <input type="text" name="event_id" id="event_id">
        <button type="submit">Search</button>
    </form>
    
    <?php if ($event): ?>
        <h2>Event Details</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
            <tr>
                <td><?php echo $event->id_event; ?></td>
                <td><?php echo $event->nom; ?></td>
                <td><?php echo $event->date_debut; ?></td>
                <td><?php echo $event->date_fin; ?></td>
                <td><?php echo $event->prix; ?></td>
                <td><?php echo $event->description; ?></td>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>