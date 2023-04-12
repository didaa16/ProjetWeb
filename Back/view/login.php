<style>
        body {
            background: linear-gradient(to bottom, #FFC107, #000000);
        }
</style>
<?php require('../controller/users/loginAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include '../model/head.php'; ?>
<body>
    <?php include '../model/navbar.php'; ?>
    <br><br>
    <form class="container" method="POST">

        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="validate">Se connecter</button>
        <br><br>
        <a href="signup.php"><p>Je n'ai pas de compte, je m'inscris</p></a>
    </form>

</body>
</html>