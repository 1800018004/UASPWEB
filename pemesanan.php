	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>UAS PEMOGRAMAN WEB</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/style.css">
		</head>
		<body>	
			<header id="header">
				<div class="header-top">
					<div class="container">
			  		<div class="row align-items-center">
			  			<div class="col-lg-6 col-sm-6 col-6 header-top-left">
			  				
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-6 header-top-right">
							<div class="header-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
			  			</div>
			  		</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/hotel.png" alt="" title="" /></a>
				      </div>
				    <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="index.php">Beranda</a></li>
				          <li class="menu-has-children"><a href="">Hotel</a>
				            <ul>
				              <li><a href="tentanghotel.html">Tentang Hotel</a></li>
				              <li><a href="pemesanan.php">Pemesanan</a></li>
				              <li><a href="datapemesanan.php">Data Pemesanan</a></li>
				              <li><a href="penawaran.html">Penawaran</a></li>
				            </ul>
				          </li>	
				           <li><a href="kontak.html">Kontak</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		   		  
					</div>
				</div>
			</header><!-- #header -->
			  
			<!-- start banner Area -->
			<section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Form Pemesanan			
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Beranda </a>  <span class="lnr lnr-arrow-right"></span>  <a href="pemesanan.php">Pemesanan</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start insurence-one Area -->
			<section class="insurence-one-area section-gap">
				<div class="container">
					
						<form action="prosesdatapemesanan.php" method="POST" enctype="multipart/form-data">
     
  <!-- Material form login -->
   <font color="white">
<div style="background-color: grey;" class="card">

  <h5 class="card-header black-color black-text text-center py-4">
   
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-2">

    <!-- Form -->
    <form class="text-center"action="prosesdatapemesanan.php" method="POST">

      <!-- Email -->
      <div class="form-group">
         <label style="color: black; font-weight: bold;">NIK :</label>
        <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK ....">
      </div>

      <!-- Password -->
      <div class="form-group">
        <label style="color: black; font-weight: bold;">Nama :</label>
        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap ....">
      </div>

      <div class="form-group">
        <label style="color: black; font-weight: bold;">No.Hp :</label>
        <input type="text" class="form-control" name="nohp" placeholder="Masukkan Nomor Handphone ....">
      </div>


       <div class="form-group">
         <label style="color: black; font-weight: bold;">Tanggal Pemesanan :</label>
        <input type="datetime-local" class="form-control" name="tanggal" placeholder="">
      </div>

      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="tombol">Pesan</button>
    </form>
						
							
							
						</div>
					</div>
				</div>	
			</section>
			<!-- End insurence-one Area -->
	
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">

					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								  <div id="logo">
				        <a href="index.html"><img src="img/hotel.png" alt="" title="" /></a>
				      </div><br>
								<p style="text-align: justify;">
									Amaris Hotel adalah sebuah penginapan yang menyediakan kamar dan sarapan dengan harga terjangkau untuk pebisnis muda dan wisatawan yang menghargai nilai dari sebuah waktu dan uang. Amaris Hotel akan memberikan Anda pengalaman menelusuri keindahan dan kerberagaman pulau-pulau di Indonesia. 
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Navigation Links</h6>
								<div class="row">
									<div class="col">
										<ul>
											<li><a href="#">Beranda</a></li>
											<li><a href="#">Tentang Hotel</a></li>
											<li><a href="#">Pemesanan</a></li>
											
										</ul>
									</div>
									<div class="col">
										<ul>
											<li><a href="#">Penawaran</a></li>
											<li><a href="#">Kontak</a></li>
											
										</ul>
									</div>										
								</div>							
							</div>
						</div>							
						
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Foto</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="img/i1.jpg" alt=""></li>
									<li><img src="img/i2.jpg" alt=""></li>
									<li><img src="img/i3.jpg" alt=""></li>
									<li><img src="img/i4.jpg" alt=""></li>
									<li><img src="img/i5.jpg" alt=""></li>
									<li><img src="img/i6.jpg" alt=""></li>
									<li><img src="img/i7.jpg" alt=""></li>
									<li><img src="img/i8.jpg" alt=""></li>
								</ul>
							</div>
						</div>						
					</div>

					<div class="row footer-bottom d-flex justify-content-between align-items-center">
						<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Adhitya Milendra 1800018004
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="js/jquery-ui.js"></script>					
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>					
			<script src="js/owl.carousel.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>