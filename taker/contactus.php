<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Daily labor</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

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

    <!-- Start header -->
	 <!-- this code is for navigation bar -->


	 <?php
      require '_nav.php'
   ?>
	<!-- End header -->
<!-- 	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Contact<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
		</div>
	</div> -->
	 
    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
          
          <style>
            h1.main-title {
  text-align: center;
  font-size: 48px;
  background:linear-gradient(to right, #1ad80e, #cca30c);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
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
                <h1 class="main-title">Need Help? Sure we are Online!</h1>
                <!-- <p class="lead">"Get in touch - We're just a click away from turning your ideas into reality!"</p> -->
   
  </style>
 
            </div><!-- end title -->

            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="" action="contact1.php" name="contactform" method="post">
                            <div class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="firstname" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="lastname" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="text-center pd">
                                    <button type="submit" value="SEND" id="submit"  name=
                                    "submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">SEND MESSAGE</button>
                                </div>
                            </div>
                        </form>
                    </div>

   <!-- this is  code for connection to the database    -->

          
   <?php
                     $con=mysqli_connect("localhost","root","","findworker");

                     if(!$con)
                     {
                        die("connection to this database fail due to ".mysqli_connect_error());
                     }
                     
                     echo "succucefully connection to the database";
                     if(isset($_POST['submit']))
                     {
                        $firstname=$_POST['firstname'];
                        $lastname=$_POST['lastname'];
                        $email=$_POST['email'];
                        $phone=$_POST['phone'];
                        $comments=$_POST['comments'];
                       

                         if($firstname!=""&&$lastname!="")
                         {
                            $query="insert into feedback values('','$firstname','$lastname','$email','$phone','$comments')";

                            $res=mysqli_query($con,$query);
                            if($res)
                            {
                                echo "data insert sucessfully harmesh";
                            }
                            else
                            {
                                echo "something went wrong";
                            }
                         }
                       }
             ?>

   <!-- endig the database code  -->

                </div><!-- end col -->
				<div class="col-xl-6 col-md-12 col-sm-12">
					<div class="map-box">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7432.86759171645!2d70.279185!3d21.333378!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bfd57b1119da71f%3A0x25ab0c664e83e710!2sKUDARAT%20FARM!5e0!3m2!1sen!2sin!4v1687834855193!5m2!1sen!2sin" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
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
							<li><a href="#">Contact</a></li>
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
                            <li>+61 3 8376 6284</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2023 <a href="#">FIND WORKER</a> Design By : <a href="https://html.design/">PVM BCA COLLEGE</a></p>
                </div>
            </div>
        </div> 
    </div>

    <!-- <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a> -->

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	
	<!-- Mapsed JavaScript -->
	<script src="js/mapsed.js"></script>
	<script src="js/01-custom-places-example.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>
</html>