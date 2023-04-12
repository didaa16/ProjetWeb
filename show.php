<?php
require_once '../controller/eventC.php';

if (isset($_POST['id_event']) && !empty($_POST['id_event'])) {
    $eventC = new eventC();
    $event = $eventC->findEvent();

    if ($event) {
        ?>
        
        <table>
            <tr>
                <th>ID</th>
                <th>Organizer ID</th>
                <th>Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
            <tr>
                <td><?php echo $event->getId(); ?></td>
                <td><?php echo $event->getorganizer(); ?></td>
                <td><?php echo $event->get_name_event(); ?></td>
                <td><?php echo $event->getdate_debut(); ?></td>
                <td><?php echo $event->getdate_fin(); ?></td>
                <td><?php echo $event->getprix(); ?></td>
                <td><?php echo $event->getDescrip(); ?></td>
            </tr>
        </table>
        <?php
    } else {
        echo "Aucun evenement trouve";
    }
}
?>

<br>
<p>Chercher un evenement:</p>
<form method="POST" action="">
    <input type=number name="id_event">
    <input type="submit" name="submit" value="Rechercher" >
</form>

                