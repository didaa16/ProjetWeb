
<?php
require '../Controller/clubC.php';
require '../Controller/salleC.php';
$clubC = new clubC();
$club = $clubC->afficherclub();


$salleC = new salleC();
$salle = $salleC->affichersalle();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>YOUTH SPACE Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>YOUTH SPACE<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul> <li><a href="index.php">Home</a></li>
          <li><a href="admin.php"  class="active">Panel</a></li>
          <li><a href="afficherclub.php" >club</a></li>
          <li><a href="affichersalle.php">salle</a></li>
          <li class="dropdown"><a href="#"><span>User</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Tache 1</a></li>
              <li><a href="#">Tache 2</a></li>
              <li><a href="#">Tache 3</a></li>
            </ul>
          </li>
        
          <li class="dropdown"><a href="#"><span>Events</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Tache 1</a></li>
              <li><a href="#">Tache 2</a></li>
              <li><a href="#">Tache 3</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Product</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Tache 1</a></li>
              <li><a href="#">Tache 2</a></li>
              <li><a href="#">Tache 3</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Forum</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Tache 1</a></li>
              <li><a href="#">Tache 2</a></li>
              <li><a href="#">Tache 3</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Media</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Tache 1</a></li>
              <li><a href="#">Tache 2</a></li>
              <li><a href="#">Tache 3</a></li>
            </ul>
          </li>
          <li><a href="about.html">About</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome to <span> <br> YOUTH SPACE</span></h2>
            <p data-aos="fade-up">A place for growth and connection.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/4.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/5.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= User Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-between gy-4">

          <div class="section-header">
            <h2>Users</h2>
          </div>
              <div class="row gy-3">
                <style>
                  table {
                    border: 1px solid black;
                  }
                  tr {
                    border: 1px solid black;
                  }
                  th {
                    border: 1px solid black;
                  }
                  td {
                    border: 1px solid black;
                  }
                </style>
                <table>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Numéro de téléphone</th>
                      <th>Adresse</th>
                      <th>Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Dupont</td>
                      <td>Pierre</td>
                      <td>01 23 45 67 89</td>
                      <td>5 Rue de la Paix</td>
                      <td>Admin</td>
                      <td>
                        <button onclick="modifierUtilisateur(1)">Modifier</button>
                        <button onclick="supprimerUtilisateur(1)">Supprimer</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Durand</td>
                      <td>Marie</td>
                      <td>06 12 34 56 78</td>
                      <td>10 Rue de la Liberté</td>
                      <td>Admin</td>
                      <td>
                        <button onclick="modifierUtilisateur(2)">Modifier</button>
                        <button onclick="supprimerUtilisateur(2)">Supprimer</button>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Martin</td>
                      <td>Luc</td>
                      <td>02 34 56 78 90</td>
                      <td>15 Rue de la République</td>
                      <td>Admin</td>
                      <td>
                        <button onclick="modifierUtilisateur(3)">Modifier</button>
                        <button onclick="supprimerUtilisateur(3)">Supprimer</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <button onclick="">Ajouter</button>

          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get Started Section -->

        <!-- ======= Clubs Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Clubs</h2>
        </div>

        <div class="row gy-4">
  <table>
    <thead>
      <tr>
        <th>Nom</th>
        <th>Type</th>
        <th>Fondateur</th>
        <th>Date de création</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        foreach ($club as $club) { // Changed variable name to $clubs to avoid conflict
      ?>
      <tr>
        <td><?php echo $club['titre']; ?></td>
        <td><?php echo $club['type']; ?></td>
        <td><?php echo $club['fondateur']; ?></td>
        <td><?php echo $club['date']; ?></td>
        <td>
          <a style="color: red;" href="supprimerclubadmin.php?idclub=<?php echo $club['idclub']; ?>">Supprimer</a>
          <a href="modifierclubadmin.php?idclub=<?php echo $club['idclub']; ?>">Modifier</a>
        </td>
      </tr>
      <?php
        }
      ?>
    </tbody>
  </table>


  <button onclick="window.location.href='ajouterclubadmin.php'" id="add-event">Ajouter un club</button>


      </div>
    </section><!-- End Services Section -->

    <!-- ======= Events Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>salles</h2>
        </div>

        <div class="row gy-4">
          <table>
            <thead>
              <tr>
           
                <th>Bloc</th>
                <th>Numero</th>
                <th>etage</th>
                <th>club</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            <?php 
        foreach ($salle as $salle) { 
          include_once '../Controller/clubC.php';

          $clubC = new clubC();
        
             $clubId = $salle['idclub'];
             $club = $clubC->getclubById($clubId);
             $clubTitle = $club['titre'];
      ?>
      <tr>
        <td><?php echo $salle['bloc']; ?></td>
        <td><?php echo $salle['numero']; ?></td>
        <td><?php echo $salle['etage']; ?></td>
      
        <td><?php echo $clubTitle; ?></td>
        <td>
          <a style="color: red;" href="supprimersalleadmin.php?idsalle=<?php echo $salle['idsalle']; ?>">Supprimer</a>
          <a href="modifiersalleadmin.php?idsalle=<?php echo $salle['idsalle']; ?>">Modifier</a>
        </td>
      </tr>
      <?php
        }
      ?>
    </tbody>
          </table>
          
          <button onclick="window.location.href='ajoutersalleadmin.php'" id="add-event">Ajouter une salle</button>
          

        </div>

      </div>
    </section><!-- End Constructions Section -->

    <!-- ======= Products Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Products</h2>
        </div>

        <div class="row gy-4">
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Type</th>
                <th>Prix</th>
                <th>Créateur</th>
                <th>Stoque</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Exemple 1</td>
                <td>type 1</td>
                <td>2500</td>
                <td>John Doe</td>
                <td>2</td>
                <td>
                  <button class="delete">Supprimer</button>
                  <button class="edit">Modifier</button>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Exemple 1</td>
                <td>type 1</td>
                <td>2500</td>
                <td>John Doe</td>
                <td>3</td>
                <td>
                  <button class="delete">Supprimer</button>
                  <button class="edit">Modifier</button>
                </td>
              </tr>
              <!-- Autres lignes de la table à ajouter ici -->
            </tbody>
          </table>
          
          <button id="add-event">Ajouter un événement</button>

      </div>
    </section><!-- End Services Section -->

  <!-- ======= Forum Section ======= -->
  <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Forum</h2>
      </div>

      <form method="GET">

        <div class="form-group row">

            <div class="col-8">
                <input type="search" name="search" class="form-control">
            </div>
            <div class="col-2">
                <button class="" type="submit">Rechercher Forum</button>
            </div>

        </div>
      </form>

    </div>
  </section><!-- End Testimonials Section -->
  
    <!-- ======= Media Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Media</h2>
        </div>

        <div class="form-group row">

          <div class="col-8">
              <input type="search" name="search" class="form-control">
          </div>
          <div class="col-2">
              <button class="" type="submit">Rechercher activité</button>
        </div>

      </div>

      </div>
    </section><!-- End Our Projects Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>YOUTH SPACE</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Product Management</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Graphic Design</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Hic solutasetp</h4>
            <ul>
              <li><a href="#">Molestiae accusamus iure</a></li>
              <li><a href="#">Excepturi dignissimos</a></li>
              <li><a href="#">Suscipit distinctio</a></li>
              <li><a href="#">Dilecta</a></li>
              <li><a href="#">Sit quas consectetur</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nobis illum</h4>
            <ul>
              <li><a href="#">Ipsam</a></li>
              <li><a href="#">Laudantium dolorum</a></li>
              <li><a href="#">Dinera</a></li>
              <li><a href="#">Trodelas</a></li>
              <li><a href="#">Flexo</a></li>
            </ul>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>YOUTH SPACE</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/YOUTH SPACE-bootstrap-construction-website-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>