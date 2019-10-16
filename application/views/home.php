<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Curriculum Vitae</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	     
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>Biodata</span></a></li>
			  <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
			  <li class="nav-item"><a href="#pendidikan-section" class="nav-link"><span>Education</span></a></li>
	          <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Experience</span></a></li>
			  <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Portofolio</span></a></li>
			  <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	        
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section id="home-section" class="hero">
		  <div class="home-slider  owl-carousel">
	      <div class="slider-item ">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img" style="background-image:url(assets/images/gue.jpg);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          
	    					</a>
		          	<div class="text">
		          		<span class="subheading">Halo</span>
			            <h1 class="mb-4 mt-3">Saya <span><?php echo $home['nama_lengkap'];?></span></h1>
			            <h2 class="mb-4 mt-2"><span><?php echo $home['moto2'];?></h2>
						<p><a href="https://wa.me/628990905004" class="btn-custom">Whatsapp Me <i class="icon-whatsapp"></i></a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img" style="background-image:url(assets/images/hari.jpg);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	
	    					</a>
		          	<div class="text">
			            <h1 class="mb-4 mt-3">Saya <span>adalah</span> <?php echo $home['moto'];?></h1>
			            <p><a href="https://wa.me/628990905004" class="btn-custom">Whatsapp Me <i class="icon-whatsapp"></i></a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-about ftco-counter img ftco-section" id="about-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(assets/images/eka.jpg);">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		            <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">Biodata</h2>
                <p>Nama Lengkap : <?php echo $home['nama_lengkap'];?></p>
            <p>Nama Panggilan : <?php echo $home['nama_panggilan'];?></p>
            <p>Tempat Tanggal Lahir : <?php echo $home['ttl'];?></p>
            <p>Alamat : <?php echo $home['alamat'];?></p>
            <p>Jenis Kelamin : <?php echo $home['jenis_kelamin'];?></p>
            <p>Agama : <?php echo $home['agama'];?></p>
            <p>No. Telp :<?php echo $home['no_telp'];?></p>
            <p>E-mail :<?php echo $home['email'];?></p> 
		          </div>
		        </div>
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="media block-6 services d-block ftco-animate">
		              <div class="icon"><span class="flaticon-analysis"></span></div>
		              <div class="media-body">
		                <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">Resume</h2>
		                <p><?php echo $home['resume'];?></p>
		              </div>
		            </div> 
		        	</div>
		       
	        </div>
        </div>
    	</div>
    </section>
		
		<section class="ftco-section bg-light" id="skills-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Skills</h2>
          </div>
        </div>
				<div class="row">
					<?php foreach($skill as $s) {?> 
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3><?= $s->nama ?></h3>
							<div class="progress">
							 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="<?= $s->keterangan?>"
							  	aria-valuemin="0" aria-valuemax="100" style="width:<?= $s->keterangan?>">
							    <span><?= $s->keterangan?></span>
							  	</div>
							</div>
						</div>
					</div>
					<?php } ?>
					

					<section class="ftco-section bg-light" id="pendidikan-section">
							<div class="container">
								<div class="row justify-content-center pb-5">
						  <div class="col-md-12 heading-section text-center ftco-animate">
							<h2 class="mb-4">Education </h2>
						  </div>
						  <div class="row justify-content-center">
								<div class="col-lg-7">
								  <div class="row">
								  <?php foreach($education as $edu) {?>
									<div class="col-lg-6 mr-auto pr-lg-5">
									  <div class="feature-3">
										<h3><?= $edu->nama ?></h3>
										<p><?= $edu->tahun ?></p>
									  </div>
									</div>
								<?php }?>
								  </div>
								</div>
							  </div>
						</div>	

					
				</div>
				

    <section class="ftco-section ftco-project" id="projects-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Experience</h2>
            
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-8">
    				<div class="project img ftco-animate img-2 d-flex justify-content-center align-items-center" style="background-image: url(assets/images/najaha.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
							<span>Online Shop Kaos dan Kerudung</span>
							<p>2018-Sekarang</p>
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="row">
    					<div class="col-md-12">
		    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(assets/images/c.jpg);">
		    					<div class="overlay"></div>
			    				<div class="text text-center p-4">
										<span>Magang sebagai Administrasi</span>
										<p>6 Bulan(2018)</p>
			    				</div>
		    				</div>
	    				</div>
	    				<div class="col-md-12">
		    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(assets/images/b.jpg);">
		    					<div class="overlay"></div>
			    				<div class="text text-center p-4">
			    					
			    				</div>
		    				</div>
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(assets/images/pmr.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
							<span>Menjadi anggota PMR</span>
							<p>2016-2018</p>
	    				</div>
    				</div>
  				</div>
  				<div class="col-md-8">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(assets/images/ca.jpeg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
							<span>Edit foto menggunakan lightroom</span>
	    					<p>2017-Sekarang</p>
	    				</div>
    				</div>
  				</div>
    		</div>
    	</div>
    </section>


    <section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Portofolio</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry right-content-end">
              <a  class="block-20" style="background-image: url('assets/images/wa.jpeg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">02 Oktober 2017</span>
	                </p>
                </div>
                <h3 class="heading">Piagam Penghargaan LATGABPALJA VI KSR PMI Unit Universitas Negeri Malang</h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a  class="block-20" style="background-image: url('assets/images/w.jpeg');">
              </a>
              <div class="text mt-3 float-center d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">03 Januari 2019</span>
	                </p>
                </div>
                <h3 class="heading">Sertifikat telah melaksanakan prakerin di Fakultas Hukum Universitas Brawijaya</h3>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Kontak Saya</h2>
            <p>Apabila anda ingin bertanya, anda dapat mengirim pesan di bawah ini:</p>
          </div>
        </div>

        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nama">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder=" Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subjek">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Kirim" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div class="img" style="background-image: url(assets/images/hari.jpg);"></div>
          </div>
        </div>
      </div>
    </section>
	<br>	

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            
          </div>
          
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Informasi Lebih Lanjut</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><a href="https://goo.gl/maps/gWhFv5yCcRhSeEfh7"><span class="icon icon-map-marker"></span><span class="text">Jl. Kendalsari GG V No.37D Malang, Jawa Timur, Indonesia</span></a></li>
	                <li><a href="https://bit.ly/2WgQ0nZ"><span class="icon icon-whatsapp"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><span class="icon icon-envelope"></span><span class="text">nd86132@gmail.com</span></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
				<a href="https://www.facebook.com/23AP.Salsabila.55924" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
                <a href="https://twitter.com/Nadia_Eka981" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="https://www.instagram.com/n_adia981/?hl=en" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> By NES <i class="icon-heart color-danger" aria-hidden="true"></i>
  
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="20px" height="20px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
  
  <script src="assets/js/main.js"></script>
    
  </body>
</html>