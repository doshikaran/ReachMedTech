<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ReachMedTech</title>
	<link rel="icon" href="logo.png" type="image//x-icon">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" href="istyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

	<section id="nav-bar">
	<nav class="navbar navbar-expand-lg navbar-light">
  	<img src="logo.png" height="75">
  	<font size="6">ReachMedTech</font></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>	
			<div class="title"> <p id="userID">
			<?php
				session_start();
				if  (isset($_SESSION['loggedin']))
				{
					$name = $_SESSION['name'];
				    echo '<h5>&nbsp;&nbsp;Welcome&nbsp;</h5>';
				    echo $name;	
				} 
				
			?></p> </div>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutus">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
          <a class="dropdown-item" href="#productpg">COVID-19</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#productpg">Hospitals</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#productpg">Simulators</a>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#testimonialpg">Testimonials</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#contactpg">Contact Us</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="signup.html">Sign Up</a>
	  </li>
      <li class="nav-item">
		<?php if (isset($_SESSION['loggedin'])):?>
			<a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Log Out</a>
		<?php else: ?>
			<a class="nav-link" href="index.html" tabindex="-1" aria-disabled="true">Log In</a>
		<?php endif; ?>
      </li>
    </ul>
  </div>
</nav>
</section>

<div id="slider">
<div id="headerSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlider" data-slide-to="1"></li>
    <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="surgery.png" class="d-block img-fluid" >
      <div class="carousel-caption">
      		<h1>In Association with Over 200 Hospitals</h1> 
      </div>
    </div>
    <div class="carousel-item">
      <img src="ven.png" class="d-block img-fluid" >
       <div class="carousel-caption">
      		<h1>Friendly Service Provided by Our Tech Team</h1> 
      </div>
    </div>
    <div class="carousel-item">
      <img src="co.png" class="d-block img-fluid" >
       <div class="carousel-caption">
      		<h1>Latest COVID-19 Products Available</h1> 
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section id="aboutus">
	<div id="about">
	<div class="container">
	<div class="row">
	<div class="col-md-6">
	<h2>About Us</h2>
	<div class="about-content">
		We are the bridge! We provide you with all the Health Care Equipments or Products from Industry to your Doorstep. Over 1000 products are delivered to the Hospitals. We also have a friendly connection with all our customers. From your Orders to Delivery, From Installation to Guide, We are there for you at every step! Because We Care. 
	</div>
	<div> <a href="about.html"> <button type="button" class="btn btn-primary">Read More>></button> </a></div>
	</div>
	<div class="col-md-6 skills-bar">
		<p>Quality Product</p>
		<div class="progress">
			<div class="progress-bar" style="width:80%;">80%</div>
		</div>

		<p>Affordable Pricing</p>
		<div class="progress">
			<div class="progress-bar" style="width:65%;">65%</div>
		</div>

		<p>Responsible Service</p>
		<div class="progress">
			<div class="progress-bar" style="width:96%;">96%</div>
		</div>

		<p>Customer Satisfaction</p>
		<div class="progress">
			<div class="progress-bar" style="width:92%;">92%</div>
		</div>
	</div>	
</div>
</section>

<section id="productpg">
<div id="products">
	<div class="container">
		<h1>Our Products</h1>
		<div class="row products">

			<div class="col-md-4 text-center">
				<?php if (isset($_SESSION['loggedin'])):?>
				<a href="covid19.php" class="makewhite">
				<?php else: ?>
			    <a href="index.html" class="makewhite">
		        <?php endif; ?>
				<div class="icon"><i class="fa fa-shield" ></i></div>
				<h3>COVID-19</h3>
				<p>In the Pandemic going on now, We provide all medical essentials.<br> Face Mask | Sanitizers | Pulse Oxymeter | Infrared Thermometer </p></a>
			</div>

			<div class="col-md-4 text-center">
				<?php if (isset($_SESSION['loggedin'])):?>
				<a href="hospitals.php" class="makewhite">
				<?php else: ?>
			    <a href="index.html" class="makewhite">
		        <?php endif; ?>
			<div class="icon"><i class="fa fa-hospital-o"></i></div>
				<h3>HOSPITALS</h3>
				<p>We deliver HealthCare Instruments.<br> Ventilator | Medical Utrasound | Nebulizer | Sphygmomanometer </p> </a>
			</div>

			<div class="col-md-4 text-center" >
				<?php if (isset($_SESSION['loggedin'])):?>
				<a href="simulators.php" class="makewhite">
				<?php else: ?>
			    <a href="index.html" class="makewhite">
		        <?php endif; ?>
				<div class="icon"><i class="fa fa-grav"></i></div>
				<h3>SIMULATORS</h3>
				<p>Learning Models For Biomedical Universities.<br> CPR Feedback SimPad | Virtual Endoscopy Simulator | Surgical Laproscopy Simulator </p></a>
			</div>
		</div>
	</div>
</div>
</section>

<section id="testimonialpg">
	<div id="testimonials">
		<div class="container">
		<h1>Testimonials</h1>
		<div class="row">
			<div class="col-md-4 text-center">
				<div class="profile">
					<img src="user1.png" class="user">
					<br><blockquote>I have had urgent orders delivered in time.<br> The team installs and guides on the set up of an instrument. They involve our hospital staff to teach basics so they could fix the instruments when required. The products are sturdy and of modern technology.<br> Great service and Amazing Team!
					</blockquote>
					<h3>Dr.Tanmay Salunke <br> <span>Surgeon, Jupiter Hospital</span></h3><br>
					</div>
				</div>
				
				<div class="col-md-4 text-center">
				<div class="profile">
					<img src="user3.jpg" class="user">
					<br><blockquote>I have all my medical products ordered from here! They have an amazing staff and I never had any issues with their products. They offer to replace defective products if found. I am very happy with their service. 
					</blockquote>
					<h3>Ms.Priyanka Barouliya <br> <span> Satisfied Customer</span></h3><br>
					</div>
				</div>

				<div class="col-md-4 text-center">
				<div class="profile">
					<img src="user1.png" class="user">
					<br><blockquote>I have had urgent orders delivered in time.<br> The team installs and guides on the set up of an instrument. They involve our hospital staff to teach basics so they could fix the instruments when required. The products are sturdy and of modern technology.<br> Great service and Amazing Team!
					</blockquote>
					<h3>Dr.Vidit Prabhu <br> <span>Pediatrician, Kids Care Pediatric Centre</span></h3><br>
					</div>
				</div>

			</div>
		</div>
	</div>	
</section>

<section id="contactpg">
<div id="contact">
	<div id="container">
	<h1>Got Queries? Or Want to Get In Touch?</h1>
	<div class="row">

	<div class="col-md-6">
	<form class="contact-form">

		<div class="form-group">
		<input type="text" class="form-control" placeholder="Your Name" required></div>
	
		<div class="form-group">
		<input type="number" class="form-control" placeholder="Phone"></div>
	
		<div class="form-group">
		<input type="email" class="form-control" placeholder="Email ID" required></div>
	
		<div class="form-group">
		<textarea class="form-control"  rows="4" placeholder="Your Message" required></textarea></div>

		<button type="submit" class="btn btn-primary">SEND MESSAGE</button>
	

</form>
</div>

<div class="col-md-6 contact-info">
	<div class="follow"><i class="fa fa-map-marker"> </i><b> Address:</b> A-Block, Hiranandani Estate, Thane (W),Mumbai 400602, India.</div>

	<div class="follow"><i class="fa fa-phone"> </i><b> Phone:</b> +91-22-25337771</div>

	<div class="follow"><i class="fa fa-envelope-o"> </i><b> Email:</b> info@reachmedtechindia.com</div>

	<div class="follow"><label><b> Connect with Us on Social Media:</b></label> 
		<a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
		<a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a>
		<a href="https://twitter.com/?lang=en" target="_blank"><i class="fa fa-twitter"></i></a>
		<a href="https://in.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
	</div>
</div>

</div>
</div>	
</section>

<section id="footer">
	<div class="container text-center">
		<p>ReachMedTech <i class="fa fa-plus-square"></i> Project Made By Saloni & Karan <i class="fa fa-copyright"></i>2020</p>
	</div>	
</section>

</body>
</html>