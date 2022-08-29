
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>gestion scolariré</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
   

    
	

</head>


    <!-- ################# Header Starts Here#######################--->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 left-item">
                        <ul>
                            <li>Gestion scolarité </li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block right-item">
                        <ul>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 nav-img">
                        <img src="assets/images/logo.png" alt="">
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="login-etudiant.php">Espace etudiant</a></li>
                            <li><a href="login-prof">Espace enseignant</a></li>
                            <li><a href="login-dep.php">Espace departement </a></li>
                            <li><a href="login-admin.php">Espace admin</a></li>
                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </header>


    <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

                     
                    

    <div class="carousel-inner">
                <div class="carousel-item active">

    <?php
  include('indexe.php');
  ?>



                    
                    
                    

			</div>
		
    </div>

    <!-- ################# Key Features Starts Here#######################--->

    <section class="key-features">
        <div class="container">
            <div class="inner-title">

                <h2>S'authentifier </h2>
                <p>vous souhaitez vous connecter en tant que : </p>
            </div>

            <div class="row">
				<div class="col-md-4 col-sm-6">
                    <a href="login-etudiant.php">
					<div class="single-key">
                        <i class="fas fa-user-graduate"></i>
                        <h5>Etudiant</h5>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut erat nec leo lobortis blandit.</p> -->
                    </div>
					</a>
                </div>

                <div class="col-md-4 col-sm-6">
					<a href="login-prof.php">
                    <div class="single-key">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <h5>Ensaignant</h5>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut erat nec leo lobortis blandit.</p> -->
                    </div>
					</a>
                </div>


                <div class="col-md-4 col-sm-6">
                    <a href="login-dep.php">
					<div class="single-key">
                        <i class="fas fa-list-alt "></i>
                        <h5>departement</h5>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut erat nec leo lobortis blandit.</p> -->
                    </div>
					</a>
                </div>
               
                <div class="col-md-4 col-sm-6">
                    <a href="login-admin.php">
					<div class="single-key">
                        <i class="fas fa-user-tie"></i>
                        <h5>Admin</h5>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut erat nec leo lobortis blandit.</p> -->
                    </div>
					</a>
                </div>

            </div>

        </div>

    </section>

    <!-- ################# prof Message Starts Here#######################--->


    <div class="prof-message">
        <div class="inner-lay">
            <div class="container">
                <div class="row">


                    <div class="col-md-6 col-sm-12 prof-img">
                        <img  src="assets/images/prof.png" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 prof-det">
                        <h2>gestion scolarité</h2>
                        <span></span>

                        <p>"Une école est un établissement où l'on accueille des individus appelés « écoliers » ou élèves afin que des professeurs leur dispensent un enseignement de façon collective. "</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>l'ecole</h2>
                    <p>
                    Établissement dans lequel est donné un enseignement collectif (général ou spécialisé).
École maternelle, primaire.
                    </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Menu</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="login-etudiant.php">Espace etudiant</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="login-prof.php">Espace ensaignant</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="about" href="login-dep.php"> espace departemnet</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="login-admin.php">Espace Admin</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contactez nous</h2>
                    <address class="md-margin-bottom-40">
                        Email: <a href="mailto:info@anybiz.com" class="" style="color:white">contact@gestionscolarité.ma</a><br>
                        Web: <a href="smart-eye.html" class="" style="color:white">www.gestionscolarité.ma</a><br>
                        Phone: <a href="smart-eye.html" class="" style="color:white">+212 6 73 41 83 01</a><br>
                        Phone: <a href="smart-eye.html" class="" style="color:white">+212 5 00 00 00 00</a>
                    </address>

                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a href="https://www.smarteyeapps.com/">2022 &copy; All Rights Reserved | Designed and Developed by nissrine sghir</a>
                
                <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
        </span>
            </div>

        </div>

</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/fontawesome.js"></script>


</html>
