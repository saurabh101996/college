<!DOCTYPE html>
<html>
<head>
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
	<title>Courses</title>
</head>
<body>
<?php include "header.php"?>

	<section>
		<div class="container subject-section">
			<div class="subject-button">
				<button id="btn1"><h2>Arts</h2></button>
				<button id="btn2"><h2>Commerce</h2></button>
				<button id="btn3"><h2>Science</h2></button>
			</div>

			<div class="container course-details" id="course-details1">
				<div class="course-text">
					<h1>Arts</h1>
					<p class="arts">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum provident ?</p>
					<ul>
						<li>History.</li>
						<li>Geography.</li>
						<li>Political Science.</li>
						<li>Psychology.</li>
						<li>Sociology.</li>
						<li>English.</li>
						<li>Hindi.</li>
						<li>Sanskrit.</li>
					</ul>
					<button>Let's Start</button>
				</div>
				<div class="course-img"><img src="img/mission.png"></div>
				
			</div>

			<div class="container course-details" id="course-details2">
				<div class="course-text">
					<h1>Commerce</h1>
					<p class="commerce">Generally, commerce refers to the exchange of goods, services, or something of value, between businesses or entities.</p>
					<ul>
						<li>Accountancy (Mandatory)</li>
						<li>Business Studies (Mandatory).</li>
						<li>Economics (Mandatory).</li>
						<li>Economics.</li>
						<li>English.</li>
						<li>Informatics Practices/ Mathematics (Mandatory).</li>
						<li>Physical Education (Optional).</li>
					</ul>
					<button>Let's Start</button>
				</div>
				<div class="course-img"><img src="img/mission.png"></div>
				
			</div>

			<div class="container course-details" id="course-details3">
				<div class="course-text">
					<h1>Science</h1>
					<p class="Science">Science is the pursuit and application of knowledge and understanding of the natural and social world following a systematic methodology based on evidence</p>

					<ul>
						<li>Physics.</li>
						<li>Chemistry.</li>
						<li>Biology.</li>
						<li>English.</li>
						<li>Mathematics.</li>
						<li>Biotechnology.</li>
						<li>Computer Science.</li>
					</ul>
					<button>Let's Start</button>
				</div>
				<div class="course-img"><img src="img/mission.png"></div>
				
			</div>

		</div>
	</section>





	<section>
		<div class="container subject-section">
			<div class="subject-button">
				<button id="btn4"><h2>Diploma</h2></button>
				<button id="btn5"><h2>Degree</h2></button>

			</div>


			<div class="container course-details" id="course-details4">
				<div class="course-text">
					<h1>Diploma</h1>
					<p class="Science">Science is the pursuit and application of knowledge and understanding of the natural and social world following a systematic methodology based on evidence</p>

					<ul>
						<li>Physics.</li>
						<li>Chemistry.</li>
						<li>Biology.</li>
						<li>English.</li>
						<li>Mathematics.</li>
						<li>Biotechnology.</li>
						<li>Computer Science.</li>
					</ul>
					<button>Let's Start</button>
				</div>
				<div class="course-img"><img src="img/mission.png"></div>
				
			</div>

			<div class="container course-details" id="course-details5">
				<div class="course-text">
					<h1>Degree</h1>
					<p class="Science">Science is the pursuit and application of knowledge and understanding of the natural and social world following a systematic methodology based on evidence</p>

					<ul>
						<li>Physics.</li>
						<li>Chemistry.</li>
						<li>Biology.</li>
						<li>English.</li>
						<li>Mathematics.</li>
						<li>Biotechnology.</li>
						<li>Computer Science.</li>
					</ul>
					<button>Let's Start</button>
				</div>
				<div class="course-img"><img src="img/mission.png"></div>
				
			</div>
		</div>
	</section>


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



<!-- <footer> -->
	
	<?php include "footer.php"?>









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

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
    	offset: 100,
    	duration: 1000,
    });
  </script>


<!-- <overlay script> -->

<script type="text/javascript">
	$(document).ready(function(){
  	$(".fa-sign-in-alt").on("click", function(){
    $("#overlay").css("display","block");
    $(".fa-times-circle").on("click",function(){
    $("#overlay").css("display","none");
    })
  });
});
</script>


<script type="text/javascript">
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
</script>

<script type="text/javascript" src="script-jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>




</body>
</html>