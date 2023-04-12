
<?php
    require_once '../model/event.php';
    require_once '../controller/eventC.php';
    if (isset ($_POST ["id_org"])&& isset ($_POST ["id_event"]) && isset ($_POST ["nom"]) && isset ($_POST ["date_debut"])&& isset ($_POST ["date_fin"])&& isset ($_POST ["prix"])&& isset ($_POST ["description"])){
        if (!empty ($_POST ["id_org"])&& !empty ($_POST ["id_event"]) && !empty($_POST ["nom"]) && !empty($_POST ["date_debut"]) && !empty($_POST ["date_fin"])&& !empty($_POST ["prix"])&& !empty($_POST ["description"])){ 

            $event = new event($_POST ["id_org"], $_POST ["id_event"], $_POST ["nom"] ,$_POST ["date_debut"], $_POST ["date_fin"],$_POST ["prix"],$_POST ["description"]);
            $eventC = new eventC();
            $eventC->createEvent($event);
            //header('location:listEvnet.php');
        }
        else{
            echo "champ invalid";
        }
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update.css">
    <script src="update.js"></script>
    <title>Document</title>
</head>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div class="wrapper">
<div class="title">
 Add form
</div>
<div class="form">
    <div class="input_field">
        <label>Identifiant d'organisateur</label>
          <input type="text" name="id_org" id="id_org" class="input" > 
          <p></p>
    </div>
    <div class="input_field">
           <label>Identifiant d'evenement</label>
            <input type="text" name="id_event" id="id_event" class="input">
    </div>
    <div class="input_field">
       <label>Nom d'evenement</label>
       <input type="text" name="nom" id="nom" class="input">
    </div>

    <div class="input_field">
       <label>Date debut</label>
       <input type="date" name="date_debut" id="date_debut" class="input">
    </div>
       
    <div class="input_field">
        <label>Date Fin</label>
        <input type="text" name="date_fin" id="date_fin" class="input">
     </div>
    <div class="input_field">
         <label>Prix</label>
         <input type="text" name="prix" id="prix" class="input">
    </div>
    <div class="input_field">
       <label>Description</label>
       <textarea  name="description" id="description" class="textarea"></textarea>

    </div>
        
        <div class="input_field">
            <input type="submit" value="ADD" class="button">
         </div>
        
    </div>
  </div>
</div>
    </form>
</body>
</html>