<?php
    require '../Controller/clubC.php';

    $clubC = new clubC();
    $clubC->supprimerclub($_GET['idclub']);
    header('Location:admin.php');
?>