<nav class="navbar navbar-expand-lg navbar-dark bg-warning" style="background-color: #feb900; font-family: 'Segoe UI', sans-serif;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="../model/Logo2PNG.png" alt="Logo" class="navbar-logo"  ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php" style="color: black;">Les questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publish-question.php" style="color: black;">Publier une question</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="my-questions.php" style="color: black;">Mes questions</a>
        </li>
        <?php 
          if(isset($_SESSION['auth'])){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="profile.php?id=<?= $_SESSION['id']; ?>" style="color: black;">Mon profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="controller/users/logoutAction.php" style="color: black;">Déconnexion</a>
            </li>
            <?php
          }
        ?>
      </ul>
    </div>
  </div>
</nav>

<style>
  .navbar-logo {
    height: 100%;
    max-height: 50px; /* ou la hauteur désirée */
  }
</style>
