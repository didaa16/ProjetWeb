<style>
        body {
            background: linear-gradient(to bottom, #FFC107, #000000);
        }
    </style>
<?php

require('actions/database.php');

//Valider le formulaire
if(isset($_POST['validate'])){

    //Vérifier si les champs ne sont pas vides
    if(!empty($_POST['title']) AND !empty($_POST['content'])){
        
        //Les données de la question
        $question_title = htmlspecialchars($_POST['title']);
        $question_content = nl2br(htmlspecialchars($_POST['content']));
        $question_date = date('d/m/Y');
        $question_id_author = $_SESSION['id'];
        $question_pseudo_author = $_SESSION['pseudo'];

        //Insérer la question sur la question
        $insertQuestionOnWebsite = $bdd->prepare('INSERT INTO questions(titre, contenu, id_auteur, pseudo_auteur, date_publication)VALUES(?, ?, ?, ?, ?)');
        $insertQuestionOnWebsite->execute(
            array(
                $question_title,
                $question_content, 
                $question_id_author, 
                $question_pseudo_author, 
                $question_date
            )
        );
        
        $successMsg = "Votre question a bien été publiée sur le site";
        
    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}