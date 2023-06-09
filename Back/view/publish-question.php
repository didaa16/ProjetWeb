<style>
        body {
            background: linear-gradient(to bottom, #FFC107, #000000);
        }
</style>
<?php 
    require('../controller/users/securityAction.php'); 
    require('../controller/questions/publishQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../model/head.php'; ?>
<body>
    <?php include '../model/navbar.php'; ?>

    <br><br>
    <form class="container" method="POST">

        <?php 
            if(isset($errorMsg)){ 
                echo '<p>'.$errorMsg.'</p>'; 
            }elseif(isset($successMsg)){ 
                echo '<p>'.$successMsg.'</p>'; 
            }
        ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titre de la question</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Contenu de la question</label>
            <textarea type="text" class="form-control" name="content"></textarea>
        </div>

        <button type="submit" class="btn btn-primary" name="validate">Publier la question</button>
   </form>
</body>
</html>