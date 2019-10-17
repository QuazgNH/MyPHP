<?php 
session_start();
include ("controller/c_home.php");
$chome = new c_Home();
$data = $chome ->index();
$coachlist = $data['Coachlist'];
$slidelist = $data['Slidelist'];
$gallerylist = $data['Gallerylist'];
//$classList = $data['Classlist'];
//print_r($coachlist);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Fitness GreenWich</title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fettle Club web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="public/css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="public/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="public/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link href="public/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/><!-- For-tabs-CSS -->
<link href="public/css/lsb.css" rel="stylesheet" type="text/css"><!-- For-gallery-CSS -->
<!-- //css files -->

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Strait" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Belleza&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top"> 
<div class="Main-agile">
<!-- banner -->
	<div id="home" class="w3ls-banner"> 

		<!-- banner-text -->
		<div class="slider">
			
			<div class="callbacks_container">
				
				<ul class="rslides callbacks callbacks1" id="slider4">
					<?php
				foreach ($slidelist as $slide) :
				 	# code..
				 ?>
					<li>
						<div  class="w3layouts-banner-top" style="background: url(public/images/<?php echo $slide->image; ?>) no-repeat 0 0;
						background-size: cover;">					
							<div class="container">
								<div class="agileits-banner-info">

									<h3><?php echo $slide->firsttext ?></h3>
											<p><?php echo $slide->secondtext ?></p>
											<!-- <img src="public/images/<?php// echo $slide->image ?>"> -->
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Find More</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					
					<?php
					endforeach 
					 ?>
				</ul>
				
			</div>
			<div class="clearfix"> </div>
			
			<!--banner Slider starts Here-->
		</div>
 
	</div>	
	<!-- //banner --> 
			<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Fitness GreenWich</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php"><span>F</span>itness GreenWich</a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
							<li class="active"><a class="page-scroll" href="#home">Home</a></li>
							<li><a class="page-scroll scroll" href="#about">About</a></li>
							<li><a class="page-scroll scroll" href="#special">Special</a></li>
							<li><a class="page-scroll scroll" href="#Coaches">Coaches</a></li>
							<li><a class="page-scroll scroll" href="#features">Features</a></li>
							<li><a class="page-scroll scroll" href="#gallery">Gallery</a></li>
							<?php 
								if(isset($_SESSION['user_name']))
								{
								?>
									<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user_name'] ?><span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="logout.php">Log out</a></li>
									</ul>
								</li>
								<?php 
								} else{
								?>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="signup.php">Signup</a></li>
										<li><a href="signin.php">Login</a></li>
									</ul>
								</li>
								<?php 
								}
								 ?>
							<!-- <li><a class="page-scroll scroll" href="#contact">Contact</a></li> -->
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
		</div>	
		<!-- //header -->
		<!-- Modal1 -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
									<img src="public/images/drock.jpg" alt=" " class="img-responsive">
									<h5>Fitness GreenWich, where you can increase your power</h5>
									<p>Come to the Fitness GreenWich center, you will get a lot of amazing exercise that you yet never see it from anywhere. With a team of experienced trainers, we can assure you of the highest quality training possible. Buy a course and take your own experience at FG fitness center!</p>
							</div>
						</div>
					</div>
				</div>
		<!-- //Modal1 -->
</div>	
<!-- main -->
<!-- welcome -->
<div class="services" id="about">
	<div class="container">
			<h3 class="title-w3">Welcome to Our World</h3>
			<div class="services-grids">
				<div class="col-md-4 services-grids-info sgi">
					<h3>Fitness GreenWich</h3>
					<p>“Strength does not come from the physical capacity. It comes from an indomitable will.” – Ghandi </p>
					<ul>
						<li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Universal range for kids, women and adults.</a></li>
						<li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Most experienced coaches.</a></li>
						<li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Prices so low, they look foreign to Hanoi.</a></li>
						<li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Best environment to improve your body</a></li>
					</ul>
				</div>
				<div class="col-md-4 services-grids-info">
					<img src="public/images/wel1.jpg" alt="">					
				</div>
				<div class="col-md-4 services-grids-info">
					<img src="public/images/wel2.jpg" alt="">
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
</div>
<!-- //welcome -->

	<!-- special -->
	<div class="jarallax se-slope about" id="special">
		<div class="container">
			<div class="col-md-7 about-img-w3-agileits">
				<!--responsive-tabs-->
				<div id="horizontalTab">
					<div class="resp-tabs-container">
						<div class="tab1">
							<img src="public/images/class111.jpg" alt="image" />
								<div class="clear"></div>
						</div>
						<div class="tab2">
							<div class="register">
								<img src="public/images/class2.jpg" alt="image" />
							</div>
						</div>
						<div class="tab3">
							<div class="reset">
								<img src="public/images/s3.jpg" alt="image" />
							</div>
						</div>
						<div class="tab4">
							<div class="main">
								<img src="public/images/s4.jpg" alt="image" />
							</div>
						</div>
					</div>
					<ul class="resp-tabs-list">
						<li><img src="public/images/class11.jpg" alt="image" /></li>
						<li><img src="public/images/class22.jpg" alt="image" /></li>
						<li><img src="public/images/s33.jpg" alt="image" /></li>
						<li><img src="public/images/s44.jpg" alt="image" /></li>
					</ul>
				</div>
				<!--//responsive-tabs-->		
			</div>
			<div class="col-md-5 about-info-w3">
				<h3 class="title">OUR Special Classes</h3>
					<p>The benefits of physical fitness are numerous and include better health, greater strength, more flexibility, increased energy, improved appearance, and a more positive attitude and mood. Regular exercise can lead to both immediate and long-term benefits. Regular physical activity has been shown to reduce the morbidity and mortality from many chronic diseases.</p>
					<p>The benefits of fitness far outweigh the inconveniences of regular exercise. To reap the maximum benefits of physical fitness, remember that your program should include all the main five components of physical fitness. These are the health related fitness components like cardiovascular endurance, flexibility, muscular endurance and muscle strength. There are in fact other components of physical fitness but they are skill related and less important. </p>
					<div class="services-grids sgi">
						<ul>
							<li><i class="glyphicon glyphicon-arrow-right"> </i><a href="course.php"><b>Let's see our classes.</b></a></li>
							<!-- <li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Hot Power Yoga.</a></li>
							<li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Ashanti Yoga.</a></li>
							<li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Yoga Retreats.</a></li>
							<li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Bikram Yoga.</a></li> -->
						</ul>
					</div>
					<div class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
							
							
							<li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a class="icon db" href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>

			</div>
			<div class="clearfix"></div>	
		</div>
	</div>
	<!-- //special -->

	<!-- Coaches -->

		<div class="team" id="Coaches">
		<div class="container">
			<div class="title-agileits">
                    <h3>Meet Our Coaches</h3> 
			   </div>
			<div class="agileits_w3layouts">
					<?php 
				foreach ($coachlist as $coach): 
				?>	
				<div class="col-md-3 team-grids wow fadeInUp animated" data-wow-delay=".5s" style="width:25%">
					<h5><?php echo $coach->name?></h5>
					<p><?php echo substr($coach->profile,0, 100);?></p>
					<div class="social-bnr-agileits about-agile">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>					
						</ul>
					</div>
					<div class="team-img">
						<img src="public/images/<?php echo $coach->image?>" style="margin:top" alt="">
					</div>
				</div>
		
	<?php
				endforeach
				?>
			</div>
		</div>
	</div>

	<!-- //Coaches -->	

	<!-- features -->
	<div class="wthree" id="features">
		<div class="container">
			<h3>Excellent Features</h3>
			<div class="services-grids">
				<div class="col-md-6 services-grid-left wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="col-xs-4 services-grid-left1">
						<i class="hovicon effect-2 sub-a"><span style="margin-top: 25px;" class="glyphicon glyphicon-user" aria-hidden="true"></span></i>
					</div>
					<div class="col-xs-8 services-grid-left2">
						<h4>Workout is for everyone</h4>
						<p>Getting ready to put together a workout program? If so, you need to take care to ensure that you know which exercises are best to include in such a program.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-grid-right wow fadeInRight animated" data-wow-delay=".5s">
					<div class="col-xs-4 services-grid-left1">
						<i class="hovicon effect-2 sub-a"><span style="margin-top: 25px;" class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></i>
					</div>
					<div class="col-xs-8 services-grid-left2">
						<h4>Workout is therapy</h4>
						<p>Workout for a stable frequency help you earn a bunch of benefits to your body</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="services-grids">
				<div class="col-md-6 services-grid-left wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="col-xs-4 services-grid-left1">
						<i class="hovicon effect-2 sub-a"><span style="margin-top: 25px;" class="glyphicon glyphicon-flash" aria-hidden="true"></span></i>
					</div>
					<div class="col-xs-8 services-grid-left2">
						<h4>Workout gives energy</h4>
						<p>“No pain, no gain. Shut up and train.”</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-grid-right wow fadeInRight animated" data-wow-delay=".5s">
					<div class="col-xs-4 services-grid-left1">
						<i class="hovicon effect-2 sub-a"><span style="margin-top: 25px;" class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></i>
					</div>
					<div class="col-xs-8 services-grid-left2">
						<h4>Good for Health </h4>
						<p> “Respect your body. It’s the only one you get.”</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //features -->

	<!-- gallery -->
	<div class="gallery" id="gallery">
		<div class="container">
			<h3 class="w3_head">Our Best Gallery</h3>
			<div class="agileinfo_gallery_grids">
				<?php
				foreach ($gallerylist as $gallery):
				?>
				<div class="col-md-4 w3_tabs_grid_sub">
					<div class="grid">
						<a href="public/images/<?php echo $gallery->image ?>" class="lsb-preview" data-lsb-group="header">
							<figure class="effect-winston">
								<img src="public/images/<?php echo $gallery->image ?>" class="img-responsive" alt=" " />
								<figcaption>
									<p>
										<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
										<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
										<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
									</p>
								</figcaption>			
							</figure>
						</a>
					</div>
				</div>
				<?php
				endforeach 
				 ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //gallery -->

<!-- testimonial -->
<div class="jarallax testimo w3ls">
	<div class="container">
		<div class="testimo-main wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
			<h3>Workout give you strengh</h3>
			<p>“Training gives us an outlet for suppressed energies created by stress and thus tones the spirit just as exercise conditions the body.” – Arnold Schwarzenegger</p>
			<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal2">Find More</a>
			</div>
		</div>
	</div>
</div>
	<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
							<img src="public/images/b1.jpg" alt=" " class="img-responsive">
								<h5>Fitness GreenWich, where you can increase your power</h5>
								<p>Come to the Fitness GreenWich center, you will get a lot of amazing exercise that you yet never see it from anywhere. With a team of experienced trainers, we can assure you of the highest quality training possible. Buy a course and take your own experience at FG fitness center!</p>
					</div>
				</div>
			</div>
		</div>
	<!-- //Modal2 -->
<!-- //testimonial -->

<!-- contact -->
<div class="contact_w3agile" id="contact">
	<div class="container wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
		<h3 class="title-w3">Contact Us</h3>
		<div>	
			<?php 
	include_once("controller/c_feedback.php");
		if (isset($_POST['register']))
	{
		if(isset($_POST['name']))
			$name = $_POST['name'];
		if(isset($_POST['email']))
			$email = $_POST['email'];
		if(isset($_POST['message']))
			$message = $_POST['message'];
		if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']))
	{
			$cfeedback = new c_Feedback();
			$cfeedback->register($name, $email, $message);
	}
		else{
			$_SESSION['error'] = 'Registration failed!';
			header("location: index.php");
	}
	}
 ?>
		<form action="index.php" method="post">
			<input type="text" placeholder="Name" name="name" required="">
			<input type="email" placeholder="Email" name="email" required="">
			<textarea name="message" placeholder="Message" required=""></textarea>
			<div class="con-form text-center">
				<input name="register" type="submit" value="Send">
			</div>
		</form>	
		</div>	
	</div>
</div>
<!-- //contact -->	
<!-- map -->	
	 <div class="map wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3724.095307416727!2d105.77955771500625!3d21.028872185998285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1529630289911" " style="border:0"></iframe>
	 </div>
<!-- //map -->	
<!-- //main -->

<!-- footer -->
<div class="jarallax footer">
	<div class="container">
		<div class="col-md-7 footer-grids">
			<h3>Get In Touch</h3>
			<form action="#" method="post">
				<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
				<input type="submit" value="Subscribe">
			</form>
		</div>
		<div class="col-md-4 footer-grids f2">
			<h3>Address</h3>
			<p>8 Ton That Thuyet <br>
				Cau Giay Dist. Hanoi<br>
				Freephone: +84 123 456 789<br>
				Telephone: +84 222 444 666<br>
				FAX: +84 666 999 666</p>
			<p>E-mail : <a href="mailto:info@example.com">fitnessgreenwich@gmail.com</a></p>
		</div>		
		<div class="clearfix"></div>
	</div>
</div>
<div class="footer-bot wow fadeInRight animated" data-wow-delay=".5s">
	<div class="container">
			<div class="logo2">
				<h2><a href="index.html">Fitness GreenWich</a></h2>
			</div>
			<div class="ftr-menu">
				 <ul>
					<li><a class="scroll" href="#home">Home </a></li>
					<li><a class="scroll" href="#about">About</a></li>
					<li><a class="scroll" href="#special">Special</a></li>
					<li><a class="scroll" href="#Coaches">Coaches</a></li>
					<li><a class="scroll" href="#features">Features</a></li>
					<li><a class="scroll" href="#gallery">Gallery</a></li>
					<?php 
								if(isset($_SESSION['user_name']))
								{
								?>
									<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user_name'] ?> <span class="caret"></span></a>
								</li>
								<?php 
								} else{
								?>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>								
								</li>
								<?php 
								}
								 ?>
				 </ul>
			</div>
			<div class="clearfix"></div>
	</div>
</div>
<div class="copy-right wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
			<p> &copy; 2018 Fitness GreenWich . All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
	</div>
</div>
<!-- //footer -->

<!-- js-scripts -->			
	
		<!-- js -->
			<script type="text/javascript" src="public/js/jquery-2.1.4.min.js"></script>
			<script type="text/javascript" src="public/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
		<!-- //js -->
		
		<!-- jarallax-js -->
			<script src="public/js/jarallax.js"></script>
			<script src="public/js/SmoothScroll.min.js"></script>
			<script type="text/javascript">
				/* init Jarallax */
				$('.jarallax').jarallax({
					speed: 0.5,
					imgWidth: 1366,
					imgHeight: 768
				})
			</script>
		<!-- //jarallax-js -->
	
		<!-- Baneer-js -->
		
			<script src="public/js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>


		<!-- //Baneer-js -->
		
		
		<!--responsive-tabs-script-->
			<script src="public/js/easy-responsive-tabs.js"></script>
				<script>
				$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true,   // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function(event) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $('#tabInfo');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
				}
				});
				$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
				});
				});
				</script>
		<!--//responsive-tabs-script-->
	
	
		<!-- Gallery-js -->
			<script src="public/js/lsb.min.js"></script>
				<script>
				$(window).load(function() {
					  $.fn.lightspeedBox();
					});
				</script>
		<!-- //Gallery-js -->
	
		<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="public/js/move-top.js"></script>
			<script type="text/javascript" src="public/js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
		<!-- start-smoth-scrolling -->
		
		<!-- smooth scrolling-bottom-to-top -->
				<script type="text/javascript">
					$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/								
					$().UItoTop({ easingType: 'easeOutQuart' });
					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		<!-- //smooth scrolling-bottom-to-top -->
	
<!-- //js-scripts -->
</body>
</html>