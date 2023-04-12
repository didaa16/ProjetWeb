<style>
        body {
            background: linear-gradient(to bottom, #FFC107, #000000);
        }
</style>
<?php 
    require('../controller/users/securityAction.php');
    require('../controller/questions/myQuestionsAction.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../model/head.php'; ?>
<body>
    <?php include '../model/navbar.php'; ?>

    <br><br>
    <div class="container">

        <?php 

            while($question = $getAllMyQuestions->fetch()){
                ?>
                <div class="card">
                    <h5 class="card-header">
                        <a href="article.php?id=<?= $question['id']; ?>">
                            <?= $question['titre']; ?>
                        </a>
                    </h5>
                    <div class="card-body">
                        <a href="article.php?id=<?= $question['id']; ?>" class="btn btn-primary">Accéder à la question</a>
                        <a href="edit-question.php?id=<?= $question['id']; ?>" class="btn btn-warning">Modifier la question</a>
                        <a href="../controller/questions/deleteQuestionAction.php?id=<?= $question['id']; ?>" class="btn btn-danger">Supprimer la question</a>
                    </div>
                </div>
                <br>
                <?php
            }

        ?>

    </div>

</body>
</html>