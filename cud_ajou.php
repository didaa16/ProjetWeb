<?php
include "./entities/Product.php";
include "./core/ProductC.php";

if ( isset($_POST['nom']) and isset($_POST['descriptions']) and isset($_POST['genre']) and isset($_POST['prix']) and isset($_FILES['img'])) {
    $Product = new Product($_POST['nom'],$_POST['descriptions'],$_POST['genre'],$_POST['prix'], $_FILES['img']['name']);

    $target_dir = "images/"; 
    $target_file = $target_dir . basename($_FILES["img"]["name"]);

    
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
      
        $ProductC = new ProductC();
        $ProductC->ajouterProduit($Product);
        header('Location: ProduitAFF.php');
    } else {
     
        echo "Error uploading file.";
    }
} else {
    echo "Verify all fields are filled";

}
?>