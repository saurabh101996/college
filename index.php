<!DOCTYPE html>
<html>
<head>
	<title>Collage Capmus</title>
	
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
	<!-- <counter> -->
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<!-- <animatin> -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />	

	<!-- <for font> -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
	

	<link rel="icon" href="img/logo.png"/>
	<meta charset="utf-8" name="viewport" content="width=device-width" intial-scale="1" shrink-to-fit="no" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- 			<header sectionn> -->

<!-- <div class="overlay" id="overlay">	
	<div class="btn">
		<a href="#" class="text-center" id="login-btn">Login</a>
		<a href="#" class=" " id="register-btn">Register</a>
		<hr id="underline">
	</div>
		
	<div class="inner-overlay">

		<i class="far fa-times-circle text-dark"></i>
		<form class="form form-group" id="login" action="">
		<input type="text" placeholder="Username" class="form-control">
		<input type="passowrd" placeholder="Password" class="form-control">
		<input type="button" value="Login" name="login" class="form-control bg-primary">
		<a href="#">Forget Password</a>
		</form>

		<form class="form form-group" id="register" action="">
		<input type="text" placeholder="Username" class="form-control">
		<input type="passowrd" placeholder="Password" class="form-control">
		<input type="passowrd" placeholder="Confirm Password" class="form-control">
		<input type="email" placeholder="Email Id" class="form-control">
		<input type="button" value="Sign Up" name="signup" class="form-control bg-success">
		</form>	
	</div>
</div> -->

	<!-- <section class="header">
		<nav>
			<a href="index.html"><img src="img/logo.png" class="logo"></a>
			<div class="nav-links" id="nav-links">
				<i class="fa fa-times" id="close" ></i>

				<ul class="nav-bar">
					<li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
					<li><a href="about.php"><i class="fas fa-info"></i>About Us</a></li>
					<li><a href="services.php"><i class="fas fa-cogs"></i>Services</a></li>
					<li><a href="course.php"><i class="fas fa-book-open"></i>Courses</a></li>
					<li><a href="contact.php"><i class="fas fa-id-card-alt"></i>Contact</a></li>
					<li><a href="#overlay" class="loginclick"><i class="fas fa-sign-in-alt"></i></a></li>
				</ul>

			</div>
			<i class="fa fa-bars" id="bar" ></i>
		</nav>
		<div class="row text-center">
			<div class="col-md-12">
				<h1>Star Your New World</h1>
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing, elit.<br> Accusantium velit nullaiusto similique, nam temporibus modi fuga autem tenetur laudantium.</p>
				<button class="btn btn-primary">Get Star The Education </button>
			</div>
		</div>
	</section> -->

	<?php include "header.php"?>



	<!-- first Contect section -->

	<section class="services">
		<div class="container text-center" data-aos-delay="1000">
			<h3 data-aos="slide-up">Services</h3>
			<div class="row">
				<div class="col-md-4 libray" data-aos="flip-up">
					<div><h4>Library</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quod minus sunt labore rerum id.</p></div>
				</div>
				<div class="col-md-4 lobortry" data-aos="flip-up">
					<div><h4>Scholarship</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quod minus sunt labore rerum id.</p></div>
				</div>
				<div class="col-md-4 sports" data-aos="flip-up">
					<div><h4>Sports</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quod minus sunt labore rerum id.</p></div>
				</div>
			</div>	
		</div>
	</section>


	<!-- Secound Contect section -->

	<section class="Courses">
		<div class="container text-center">
			<h3 data-aos="slide-up">Courses</h3>
			<div class="row" data-aos-delay="1000">
				<div class="col-md-4 basic" data-aos="fade-right">
					<div><h4>Basic</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quod minus sunt labore rerum id.</p></div>
				</div>
				<div class="col-md-4 immediate" data-aos="fade-up">
					<div><h4>Immediate</h4>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium veniam alias voluptatibus est, odit, nobis?</p></div>
				</div>
				<div class="col-md-4 advance" data-aos="fade-left">
					<div><h4>Advance</h4>
					<p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Earum consequuntur consectetur obcaecati dolor officia impedit.</p></div>
				</div>
			</div>
		</div>
	</section>

	<!-- Third Contect section -->

	<section class="counter-div p-5">
		<div class="container text-center">
			<div class="row counter-panel"  data-aos-delay="1000">
				<div class="col-md-4 addmission" data-aos="fade-up">
					<div><h3>Addmission</h3>
					<i class="fas fa-university"></i>
					<p class="counter">5,500</p></div>
				</div>
				<div class="col-md-4 student" data-aos="fade-up">
					<div><h3>Student's</h3>
					<i class="fas fa-user-graduate"></i>
					<p class="counter">10,000</p></div>
				</div>
				<div class="col-md-4 campus" data-aos="fade-up">
					<div><h3>Campus Selection</h3>
					<i class="fas fa-trophy"></i>
					<p class="counter">5,000</p></div>
				</div>
			</div>
		</div>
	</section>


	<!-- fourth Contect section -->

	
	


 	<!-- <footer> -->
	<?php include "footer.php"?>
	<!-- <footer>
		<div class="container">
			<div class="row">
			<div class="col-md-4">
				<h3 class="title text-center" data-aos="fade-up">Get In Touch</h3>
				<ul  data-aos-delay="5000">
					<li data-aos="fade-right"><i class="fas fa-envelope"></i>
					<a href="mailto:ghanekar_saurabh@yahoo.com">ghanekar_saurabh@yahoo.com</a></li>

					<li data-aos="fade-right"><i class="fas fa-phone-alt"></i>
					<a href="tel:46413215416">46413215416</a></li>
			
					<li data-aos="fade-right"><i class="fas fa-compass"></i><span>Lorem, ipsum dolor sit amet consectetur adipisicing  elit. Cupiditate, corporis</span></li>
				</ul>
			</div>
			<div class="col-md-4 text-center">
				<h3 class="title" data-aos="fade-up">Important Link</h3>
				<ul  data-aos-delay="5000">
					<li data-aos="fade-left">Home</li>
					<li data-aos="fade-left">Seriveces</li>	
					<li data-aos="fade-left">Scholarship</li>
					<li data-aos="fade-left">Campus Selection</li>
				</ul>
			</div>
			<div class="col-md-4 text-center">
				<h3 class="title" data-aos="fade-up">Contact Me</h3>
				<form>
					<input type="text" name="name" placeholder=" Name" data-aos="fade-left">
					<input type="email" name="email" placeholder=" Email Id" data-aos="fade-left">
					<textarea placeholder=" Message" data-aos="fade-left"></textarea><br>
					<input type="button" name="submit" value="Submit" data-aos="fade-left">
				</form>
			</div>
			
			<hr width="100%" color="red">


			<div class="col-md-6 text-left">
				Copywrite &copy; | Design By <a href="#">Saurabh Ghanekar</a>
			</div>

			<div class="col-md-6 text-right">
				<i class="fab fa-twitter"></i>
				<i class="fab fa-facebook-f"></i>
				<i class="fab fa-google"></i>
			</div>
		</div>
		</div>
	</footer> -->

	<script src="jquery.counterup.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script>
		$(document).ready(function( $ )
		{
			$('.counter').counterUp({
		    delay: 10,
		    time: 1000,
		    dealy: 1000
 			});
		});
	</script>

<!-- <nav bar> -->
<!-- <script type="text/javascript">
	
 var navLinks = document.getElementById("nav-links");
 function showMenu() {
 	navLinks.style.right = "0";
 }
 function hideMenu() {
 	navLinks.style.right = "-200px";
 }

</script> -->

<!-- <script type="text/javascript">
	$(document).ready(function(){
  	$("#bar").on("click", function(){
    $("#nav-links").css("right","0px");
    $("#close").on("click",function(){
    $("#nav-links").css("right","-200px");
    })
  });
});
</script> -->



<!-- <overlay script> -->
<!-- 
<script type="text/javascript">
	$(document).ready(function(){
  	$(".fa-sign-in-alt").on("click", function(){
    $("#overlay").css("display","block");
    $(".fa-times-circle").on("click",function(){
    $("#overlay").css("display","none");
    })
  });
});
</script> -->


<!-- <script type="text/javascript">
	$(document).ready(function(){
		$("#register-btn").on("click",function(){
			$("#register").css("left","50px");
			$("#login").css("left","-250px");	
			$("#underline").css("transform", "translateX(100%)");
		});
	});

	$(document).ready(function(){
		$("#login-btn").on("click",function(){
			$("#login").css("left","50px");	
			$("#register").css("left","450px");	
			$("#underline").css("transform", "translateX(-0%)");
		});
	});
</script> -->





<!-- <script type="text/javascript">
	$(document).ready(function(){
		var navLinks = $("#nav-links");

		$("#bar").on(click(function())){
		navLinks.css("right","0");
		};
		$("#close").click(){
		navLinks.style('right','-200px');
	});

</script> -->
<!-- <animation script> -->
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
    	offset: 100,
    	duration: 1000,
    });
  </script>
<script type="text/javascript" src="script-jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>