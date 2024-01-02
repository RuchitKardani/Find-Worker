<?php
session_start();
if(!isset($_SESSION['email']))
{
  header('location:../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title>Find Worker</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Include Bootstrap JS (jQuery is required) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Bootstrap CSS -->

<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>

<!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
       <![endif]-->


</head>

<body class="host_version">

	
	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->

	<!-- start header -->

	<?php require '_nav.php'  ?>


	<!-- End header -->


	<!-- new carousel -->
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel"
		data-pause="hover" data-interval="false">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
			<li data-target="#carouselExampleControls" data-slide-to="3"></li>
			<li data-target="#carouselExampleControls" data-slide-to="4"></li>
			<li data-target="#carouselExampleControls" data-slide-to="5"></li>
			<li data-target="#carouselExampleControls" data-slide-to="6"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
	
				<div id="home" class="first-section" id="haru" style="background-image:url('images/connect.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										

									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/blog_5.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">FURNITURE <strong>WORKER</strong></h2>
										
										<a href="contactus.php" class="hover-btn-new"><span>Contact Us</span></a>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<a href="#" class="hover-btn-new"><span>BOOK NOW</span></a>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/blog_4.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>CONSTRUCTORE WORKER OR </strong> CONTRACTORE
										</h2>
										
										<a href="contactus.php" class="hover-btn-new"><span>Contact Us</span></a>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<a href="#" class="hover-btn-new"><span>BOOK NOW</span></a>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/agriculture.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>FIND AGRICULTURE</strong> WORKER
										</h2>
										
										<a href="contactus.php" class="hover-btn-new"><span>Contact Us</span></a>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<a href="#" class="hover-btn-new"><span>BOOK NOW</span></a>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/plumber.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">FIND <strong>PLUMBER</strong> FOR YOUR<strong> HOME PLUMBING</strong></h2>
										
										<a href="contactus.php" class="hover-btn-new"><span>Contact Us</span></a>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<a href="#" class="hover-btn-new"><span>BOOK NOW</span></a>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/blog_6.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">BOOKS <strong>DRIVER FOR YOUR TRIP</strong></h2>
										
										<a href="contactus.php" class="hover-btn-new"><span>Contact Us</span></a>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<a href="#" class="hover-btn-new"><span>BOOK NOW</span></a>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/blog_7.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">FIND ELECTRICIAN <strong>FOR YOUR BUSSINESS OR HOME</strong></h2>
										
										<a href="contactus.php" class="hover-btn-new"><span>Contact Us</span></a>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<a href="#" class="hover-btn-new"><span>BOOK NOW</span></a>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<!-- ending the new carousel -->
	<style>
		#overviews {
		  background-image: url("images/bgc.jpg");
		  background-repeat: no-repeat;
		  background-size: cover;
		  background-position: center;
		  background-attachment: fixed;
		     /* filter: brightness(50%); */
		  background-color: transparent;
		}
		#overviews::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3); /* Adjust the opacity (last value) to decrease/increase the brightness */
  }
	  </style>
	<div id="overviews" class="section wb">
		<div class="container">
			<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css"> -->
			<!-- Include Bootstrap JS (jQuery is required) -->
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

			<hr class="invis">
 <style>
    .main-title {
      text-align: center;
      font-size: 48px;
      white-space: nowrap;
      overflow: hidden;
    }

    .word {
      display: inline-block;
      animation: wordSwellEffect 2s ease-in-out infinite;
    }

    @keyframes wordSwellEffect {
      0% {
        transform: scale(1.4);
      }
      50% {
        transform: scale(1.1);
      }
      100% {
        transform: scale(1);
      }
    }

    h1.main-title-light {
      text-align: center;
      font-size: 48px;
      background: linear-gradient(to right, #ffc107, #ff0000);
      -webkit-background-clip: text;
      -webkit-text-fill-color: yellow;
      text-shadow: 19px -20px 20px #f8f9fa;
      white-space: nowrap;
      overflow: hidden;
      animation: movingLightEffect 5s linear infinite;
    }

    @keyframes movingLightEffect {
      0% {
        text-shadow: none;
      }
      50% {
        text-shadow: 0px 0px 8px rgba(255, 255, 255, 0.8),
                     0px 0px 16px rgba(255, 255, 255, 0.4),
                     0px 0px 32px rgba(255, 255, 255, 0.2),
                     0px 0px 64px rgba(255, 255, 255, 0.1);
      }
      100% {
        text-shadow: none;
      }
    }
  </style>
  <h1 class="main-title-light">
    <span class="word">FIND</span>
    <span class="word">YOUR</span>
    <span class="word">WORKER</span>
  </h1>

  <script>
    const words = document.querySelectorAll('.word');
    let delay = 1;

    words.forEach((word) => {
      word.style.animationDelay = `${delay}s`;
      delay += 0.4;
    });
  </script>
		
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="course-item">
						<div class="image-blog">
							<img src="images/blog_1.jpg" alt="" class="img-fluid" style="height:12rem;">
						</div>
						<div class="course-br">
							<div class="course-title">
								<!-- title class for changing h2 color -->
								<h2><a href="#" title="">Agriculture</a></h2>
							</div>
							<div class="course-desc">
								<p>BOOKS ALL CATEGORY LABOR FOR YOUR FARM WORK
								</p>
							</div>
						
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half"></i>

								<button class="book-button"  onclick="window.location.href='contactus.php'">BOOK NOW</button>
							</div>
						</div>

					</div>
				</div><!-- end col -->

				<div class="col-lg-4 col-md-6 col-12">
					<div class="course-item">
						<div class="image-blog">
							<img src="images/blog_2.jpg" alt="" class="img-fluid" style="height:13.5rem;">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Plumber</a></h2>
							</div>
							<div class="blog-desc">
								<p>FIND YOUR HOME PLUMBERING WORKS</p>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half"></i>
								
								<button class="book-button"  onclick="window.location.href='contactus.php'">BOOK NOW</button>
							</div>
						</div>

					</div>
				</div><!-- end col -->

				<div class="col-lg-4 col-md-6 col-12">
					<div class="course-item">
						<div class="image-blog">
							<img src="images/blog_3.jpg" alt="" class="img-fluid" style="height:13.5rem;">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Painter</a></h2>
							</div>
							<div class="course-desc">
								<p>BOOKS FOR PAINTING AT ANYWHERE. </p>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half"></i>
								
								<button class="book-button"  onclick="window.location.href='contactus.php'">BOOK NOW</button>
							</div>
						</div>

					</div>
				</div><!-- end col -->

			</div><!-- end row -->

			<hr class="hr3">

			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="course-item">
						<div class="image-blog">
							<img src="images/blog_4.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">constructor</a></h2>
							</div>
							<div class="course-desc">
								<p>BOOKS CONSTRUCTORE LABOR </p>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half"></i>
								
								<button class="book-button"  onclick="window.location.href='contactus.php'">BOOK NOW</button>
							</div>
						</div>

					</div>
				</div><!-- end col -->

				<div class="col-lg-4 col-md-6 col-12">
					<div class="course-item">
						<div class="image-blog">
							<img src="images/blog_5.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title=""> Mishtri</a></h2>
							</div>
							<div class="course-desc">
								<p> FURNITURE WORKER AT ANYWHERE </p>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half"></i>
								
								<button class="book-button"  onclick="window.location.href='contactus.php'">BOOK NOW</button>
							</div>
						</div>

					</div>
				</div><!-- end col -->

				<div class="col-lg-4 col-md-6 col-12">
					<div class="course-item">
						<div class="image-blog">
							<img src="images/blog_6.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Driver</a></h2>
							</div>
							<div class="course-desc">
								<p>BOOKS OR HIRE A DRIVER FOR PERSONAL TRIP </p>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half"></i>
								
								<button class="book-button"  onclick="window.location.href='contactus.php'">BOOK NOW</button>
							</div>
						</div>

					</div>
				</div><!-- end col -->
			</div><!-- end row -->
			<hr class="hr3">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="course-item">
						<div class="image-blog">
							<img src="images/blog_7.jpg" alt="" class="img-fluid" style="height:13.5rem;">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Electrician</a></h2>
							</div>
							<div class="course-desc">
								<p>FIND ELECTRICIAN FOR HOME AND ANYWHERE . </p>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half"></i>
								
								<button class="book-button"  onclick="window.location.href='contactus.php'">BOOK NOW</button>
							</div>
						</div>

					</div>
				</div><!-- end col -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="course-item">
						<div class="image-blog">
							<img src="images/blog_8.jpg" alt="" class="img-fluid" style="height:13.5rem;">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Tiles & marbels</a></h2>
							</div>
							<div class="course-desc">
								<p>FIND A TILES FITTING WORKER. </p>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half"></i>
								
								<button class="book-button"  onclick="window.location.href='contactus.php'">BOOK NOW</button>
							</div>
						</div>

					</div>
				</div><!-- end col -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="course-item">
						<div class="image-blog">
							<img src="images/blog_10.jpg"
								alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">PEST-CONTROL</a></h2>
							</div>
							<div class="course-desc">
								<p>CLEANING WORKER FOR YOUR WORKING AREA </p>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half"></i>
								
								<button class="book-button"  onclick="window.location.href='contactus.php'">BOOK NOW</button>
							</div>
						</div>

					</div>
				</div><!-- end col -->
			</div>
		</div><!-- end container -->
	</div><!-- end section -->

	

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="widget clearfix">
						<div class="widget-title">
							<h3 class="about">About US</h3>
						</div>
				
						<p class="hd" > Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus
							bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis
							dis montes harmesh devdhariya.</p>
						<div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul><!-- end links -->
						</div>
					</div><!-- end clearfix -->
				</div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="widget clearfix">
						<div class="widget-title">
							<h3>Information Link</h3>
						</div>
						<ul class="footer-links">
							<li><a href="#">Home</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Pricing</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact </a></li>
						</ul><!-- end links -->
					</div><!-- end clearfix -->
				</div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="widget clearfix">
						<div class="widget-title">
							<h3>Contact Details</h3>
						</div>

						<ul class="footer-links">
							<li><a href="mailto:#">info@yoursite.com</a></li>
							<li><a href="#">www.yoursite.com</a></li>
							<li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
							<li>+7863018932
							</li>
						</ul><!-- end links -->
					</div><!-- end clearfix -->
				</div><!-- end col -->

			</div><!-- end row -->
			<hr class="hr3">
		</div><!-- end container -->
	</footer><!-- end footer -->
	<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/all.js"></script>
	<!-- ALL PLUGINS -->
	<script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll(".timeline"), {
			forceVerticalMode: 700,
			mode: "horizontal",
			verticalStartPosition: "left",
			visibleItems: 4
		});
	</script>
</body>

</html>