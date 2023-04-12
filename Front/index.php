<style>
        body {
            background: linear-gradient(to bottom, #FFC107, #000000);
        }
        .btn-gradient-yellow {
            background: linear-gradient(45deg, #feb900, #ffd248);
            color: #000000;
            border-color: #feb900;
        }

        .btn-gradient-yellow:hover {
            background: linear-gradient(45deg, #ffd248, #feb900);
            border-color: #ffd248;
            color: #000000;
        }
</style>
<?php 
    session_start();
    require('actions/questions/showAllQuestionsAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="container">
    
        <form method="GET">

            <div class="form-group row">

                <div class="col-8">
                    <input type="search" name="search" class="form-control">
                </div>
                <div class="col-4">
                    <button class="btn btn-gradient-yellow btn-lg" type="submit">Rechercher</button>
                </div>

            </div>
        </form>

        <br>

        <?php 
            while($question = $getAllQuestions->fetch()){
                ?>
                <div class="card">
                    <div class="card-header">
                        <a href="article.php?id=<?= $question['id']; ?>">
                            <h4 class="text-black"><?= $question['titre']; ?></h4>
                        </a>
                    </div>
                    
                    <div class="card-footer">
                        Publié par <a href="profile.php?id=<?= $question['id_auteur']; ?>" class="text-black"><?= $question['pseudo_auteur']; ?></a> le <span class="text-black"><?= $question['date_publication']; ?></span>
                    </div>
                </div>
                <br>
                <?php
            }
        ?>

    </div>

</body>
</html>
