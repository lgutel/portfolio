<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Portfolio</title>
	<meta name="description" content="Portfolio de Louis Gutel">
	<meta name="keywords" content="Portfolio de Louis Gutel" />
	<meta name="author" content="Louis Gutel">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
        
    <!-- Google Fonts  -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

	<!-- Libs and Plugins CSS -->
	<link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="inc/animations/css/animate.min.css">
	<link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
	<link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
	<link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css">

		<!-- Theme CSS -->
    <link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/mobile.css">
	<!-- Skin CSS -->
	<link rel="stylesheet" href="css/skin/cool-gray.css">
</head>
<body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- Display loading image while page loads -->
    	<div class="body">
            <?=require("header.php");?>
            <!-- Begin text carousel intro section -->
			<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/page-de-garde.jpg);">
				
				<div class="container">
					<div class="caption text-center text-white" data-stellar-ratio="0.7">

						<div id="owl-intro-text" class="owl-carousel">
							<div class="item">
								<h1>Je suis Louis Gutel</h1>
								<p></p>
                                <div class="extra-space-l"></div>
							</div>
							<div class="item">
								<h1>Je suis étudiant en réseaux et télécom</h1>
								<p></p>
								<div class="extra-space-l"></div>
								<a class="btn btn-blank" href="" target="_blank" role="button">Regarder plus</a>
							</div>
						</div>

					</div> <!-- /.caption -->
				</div> <!-- /.container -->

			</section>
            <?=require("apropo.php");?>
            <!-- Begin cta -->
          <section id="cta-section">
          	<div class="cta">
            	<div class="container">
                	<div class="row">
                    
                    	<div class="col-md-9">
                        	<h1>Téléchargement du CV</h1>
                            <p>Ci-dessous vous allez retrouver mon CV en format PDF</p>
                        </div>
                        
                        <div class="col-md-3">
                        	<div class="cta-btn wow bounceInRight" data-wow-delay="0.4s">
                            <a class="btn btn-default btn-lg" href="CV_l_gutel.pdf" target="_blank" role="button">Téléchargement</a>
                        	</div>
                        </div>
                        
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div>
          </section>
          <!-- End cta -->   

                    
            <!-- Begin contact section -->
		    <section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/map-bg.jpg);">
            <div class="cover"></div>
            
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Contacts</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Pour me contacter</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
             
                <div class="contact wow bounceInRight" data-wow-delay="0.4s">
                    <div class="container">
                    	<div class="row">
                        
                            <div class="col-sm-6">
                                <div class="contact-info">
                                    <h4>Mon adresse</h4>
                                    <ul class="contact-address">
			                            <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; 6 Chemien de la fraignée, <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; lieu dit le Breuil <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 17470 Cherbonières, France</li>
			                            <li><i class="fa fa-phone"></i>&nbsp; 06 40 92 20 04</li>
			                            <li><i class="fa fa-envelope"></i> louisgutel00@gmail.com</li>
			                        </ul>
                                </div>
                            </div>
                        
                        	<div class="col-sm-6">
                                <div class="contact-form">
                                	<h4>Pour me contacter</h4>
                                    <form role="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="Votre nom" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control input-lg" placeholder="E-mail" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="Object" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control input-lg" rows="5" placeholder="Message" required></textarea>
                                        </div>
                                        <button type="submit" class="btn wow bounceInRight" data-wow-delay="0.8s">Envoyer</button>
                                    </form>
                                </div>	
                            </div>
                                                                                
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
            </section>
            <!-- End contact section -->
            <footer> 
                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="copyright">Copyright by Louis GUTEL &copy;</p>
                    </div>
                </div>
            </footer>      
        </div><!-- body ends -->
        
        <!-- Plugins JS -->
		<script src="inc/jquery/jquery-1.11.1.min.js"></script>
		<script src="inc/bootstrap/js/bootstrap.min.js"></script>
		<script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="inc/stellar/js/jquery.stellar.min.js"></script>
		<script src="inc/animations/js/wow.min.js"></script>
        <script src="inc/waypoints.min.js"></script>
		<script src="inc/isotope.pkgd.min.js"></script>
		<script src="inc/classie.js"></script>
		<script src="inc/jquery.easing.min.js"></script>
		<script src="inc/jquery.counterup.min.js"></script>
		<script src="inc/smoothscroll.js"></script>

		<!-- Theme JS -->
		<script src="js/theme.js"></script>

    </body>        
</html>

</html>