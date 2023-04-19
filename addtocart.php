<?php
    include "./core/ProductC.php";

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $ProductC = new ProductC();
        $product = $ProductC->getProductById($id);
        if(!$product) {
            echo "Product not found.";
            die();
        }

        $db = Database::getConnexion();
        try {
           
            $sqlCheckTable = "SELECT 1 FROM panier LIMIT 1";
            $reqCheckTable = $db->query($sqlCheckTable);
        } catch (Exception $e) {
            
            $sqlCreateTable = "CREATE TABLE panier (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                nom VARCHAR(50) NOT NULL,
                descriptions VARCHAR(255) NOT NULL,
                genre VARCHAR(255) NOT NULL,
                prix VARCHAR(255) NOT NULL,
                img VARCHAR(255) NOT NULL,
                product_id INT(11) NOT NULL,
                total DECIMAL(10,2) DEFAULT 0,
                FOREIGN KEY (product_id) REFERENCES produit(id)
            )";
            $reqCreateTable = $db->query($sqlCreateTable);
        }

        
        $query = "INSERT INTO panier (nom, descriptions, genre, prix, img, product_id) 
                  VALUES (:nom, :descriptions, :genre, :prix, :img, :product_id)";
        $stmt = $db->prepare($query);
        $stmt->bindValue(":nom", $product['nom']);
        $stmt->bindValue(":descriptions", $product['descriptions']);
        $stmt->bindValue(":genre", $product['genre']);
        $stmt->bindValue(":prix", $product['prix']);
        $stmt->bindValue(":img", $product['img']);
        $stmt->bindValue(":product_id", $id);
        $result = $stmt->execute();

        if($result) {
            
            $queryTotal = "SELECT SUM(prix) as total FROM panier";
            $stmtTotal = $db->query($queryTotal);
            $total = $stmtTotal->fetch(PDO::FETCH_ASSOC)['total'];

            
            $queryUpdate = "UPDATE panier SET total = :total";
            $stmtUpdate = $db->prepare($queryUpdate);
            $stmtUpdate->bindValue(":total", $total);
            $stmtUpdate->execute();

            header('Location: Produit.php');
        } else {
            echo "Error adding product to cart.";
        }
    } else {
        echo "Invalid request.";
    }
?>
