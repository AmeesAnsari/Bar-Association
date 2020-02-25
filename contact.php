<!--...................header part...................-->

<!DOCTYPE html>
<html>
	<head>
		<title>Trivandrum Bar Association</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body class="bg-light-gray">
	<!----header------------------>
		<section>
			<header class="dark-blue">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-12  py-3 py-sm-3 text-right  text-color">
							<a href="#" class="text-light font-weight-bolder text-decoration-none"><i class="fas fa-lock px-1"></i> Login</a>							
							<a href="#" class="text-light font-weight-bolder text-decoration-none"><i class="fas fa-user px-1"></i> Sign Up</a>
						</div>
						
					</div>
				</div>
			</header>
		</section>
		<!-----------------menubar------------------------------->
		<section class="container-fluid bg-white">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light toggle-btn">
							<a class="navbar-brand" href="#">
								<img src="img/dashboard.png" class="img-fluid ">
							</a>
				 
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=					"#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fas fa-bars text-dark"></i>
						</button>
				<div class="collapse navbar-collapse " id="navbarSupportedContent1"> 
					<ul class="navbar-nav  text-left ml-auto ">
						<li class="nav-item ">
							<a class="nav-link text-danger" href="home.php">HOME</a>
						</li>
						<li class="nav-item ">
								<a class="nav-link text-dark " href="about.php">ABOUT US</a>
						</li>
						<li class="nav-item">
								<a class="nav-link text-dark" href="members.php">MEMBERS</a>
						</li>
						<li class="nav-item">
								<a class="nav-link text-dark" href="downloads.php">DOWNLOADS</a>
						</li>						
						<li class="nav-item">
								<a class="nav-link text-dark" href="#">CONTACT US</a>
						</li>
						
					</ul>
					
				</div>			
				</nav>
			</div>
					
				
		</section>





<!--...................header part...................-->
<div class="container-fluid bg-light-gray">
<!--...................1st part...................-->
	<section class="container  py-sm-4">
		<div class="row">
			<div class="col-md-5 bg-white px-sm-5 mt-2 mt-sm-0 bck">

					<h4 class="mt-sm-5 mt-2">The Trivandrum Bar Association</h4>
					Court Copmlex,Vanchyoor
					Thiruvanathapuram <br>
					Kerala-695035, India <br>
					Phone: +91 9447428104 <br>
					E-mail: contact@thetrivandrumbarassociation.com
			</div>
<!--............google map..................-->
			<div class="col-md-7 col-12 mt-2 mt-sm-0">
					
				 <div class=" embed-responsive embed-responsive-21by9">
				  <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"  frameborder="0" style="border:0" class="embed-responsive-item"></iframe></div>
										
				</div>

			</div>
		
	
		
	</section>
<!--.................part2 section....................-->
	<section class="container bg-white mt-2 ">
		<div class="row">
			<div class="col-md-5 py-3 ">
				
				<input type="text" placeholder="Name" class="form-control mb-2 border border-secondary ml-3 form-hint">
				<input type="text" placeholder="Email ID" class="form-control mb-2 border border-secondary ml-3 form-hint">
				<input type="text" placeholder="Phone Number" class="form-control mb-2 border border-secondary ml-3 form-hint">
				<input type="text" placeholder="Subject" class="form-control mb-2 border border-secondary ml-3 form-hint">
				
			</div>
			<div class="col-md-7 py-3 col-12">
				<textarea  placeholder="Message" class=" border border-secondary text-hint"></textarea>
				<input type="submit" value="SUBMIT" class="btn dark-blue text-white float-right mt-2 mr-4 py-sm-2">
			</div>
		</div>
	</section>
<div class="py-sm-3 py-2"></div>
<!--.................part2 section end....................-->
	<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
<!--...................1st part end...................-->	
</div>
<!--...................footer part...................-->

	<footer>
		<section class="bg-dark">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="text-center p-3">
							<div class="footer-sm-list">
							<ul class="list-unstyled d-inline-flex">
								<li><a href="#" class="text-white px-3 border-right">HOME</a></li>
								<li><a href="#" class="text-white px-3 border-right">ABOUT US</a></li>
								<li><a href="#" class="text-white px-3 border-right">SIGN UP</a></li>
								<li><a href="#" class="text-white px-3 border-right">MEMBERS</a></li>
								<li><a href="#" class="text-white px-3 border-right">DOWNLOADS</a></li>
								<li><a href="#" class="text-white px-3">CONTACT US</a></li>
							</ul>
							</div>
							<div class="h-100 text-white">
								<i class="fab fa-facebook-f fa-lg px-3 py-2"></i>
								<i class="fab fa-twitter fa-lg px-3 py-2"></i>
								<i class="fab fa-google-plus-g fa-lg px-3 py-2"></i>
								<i class="fab fa-youtube fa-lg px-3 py-2"></i>
								<p class="small">&copy; 2017 Trivandrum Bar Association All rights reserved.<span class="d-block py-3">Designed and Developed by <strong>OrisysIndia</strong></span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		</footer>
<!--...................footer part end...................-->	