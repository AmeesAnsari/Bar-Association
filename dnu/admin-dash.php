<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
<link rel="stylesheet" href="fa/css/all.min.css">	
<style></style>
</head>

<body class="bg-color">

<!---header section1----------->
	<section>
		<header>
			<div class="container-fluid bg-light">
				<div class="row">
					<div class="col-md-6">
							<a class="navbar-brand" href="#">
								<img src="img/dashboard.png" class="img-fluid ">
							</a>
					</div>
					<div class="col-md-6 d-flex">
						<nav class="navbar navbar-expand-lg navbar-light ml-auto ">
								
										<a class="nav-link text-dark" href="#">Welcome<strong class="px-1">Admin</strong></a>
									
										<a class="nav-link text-dark" href="#key"><i class="fas fa-key fa-1x"></i></a>
									
										<a class="nav-link text-dark " href="#logout"><i class="fas fa-power-off"></i></a>
									
						
						
				</nav>
				
			</div>
		</header>
	</section>

<!----------------------------------headersection2-------------------------------------->
<header class="">
	<div class="">
		<div class="dark-blue">
					
		
			
					

	<ul class="nav nav-pills  py-2" id="pills-tab" role="tablist">
	
		 <li class="nav-item">
			<a class="nav-link text-white" id="pills-profile-tab" data-toggle="pill" href="#" role="tab" aria-controls="pills-profile" aria-selected="false "><i class="fas fa-tachometer-alt px-2"></i>Dashboard</a>
		  </li>
		  
		  <li class="nav-item">
			<a class="nav-link text-white" href="member-list.php" id="pills-profile-tab" data-toggle="pill"   aria-controls="pills-profile" aria-selected="false "><i class="fa fa-user px-2"></i>Members</a>
		  </li>
		  
		  <li class="nav-item">
			<a class="nav-link text-white" id="pills-contact-tab" data-toggle="pill" href="excel-upload.php" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="fa fa-upload px-2"></i>Excel Upload</a>
		  </li>
	  
	</ul>
	
			<div class="tab-content" id="pills-tabContent">
			  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"></div>
			  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"></div>
			  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
			</div>
								

							
						
					
		</div>
	</div>
		
</header>

		<section>
			
			  <div class="row container">
				
					<div class="col-md-4 ml-4">
						<h4>Dashboard</h4>
					</div>
					
			  </div>
		  
		<div class="row container m-auto py-3">
			
			  <div class="col-md-6 py-3">
					
				<!------------------------button 1----------------------->
				
					<button type="button" class="btn text-light btn-lg btn-block dark-blue py-3 ">
						<div class="row">
							<div class="col-md-6 text-left">
								<i class="fas fa-user fa-3x" aria-hidden="true"></i>
							</div>
							
							<div class="col-md-6 text-right">
								
									<h4>960</h4>
									<small>Active Members</small>
							
							</div>
						</div>
					</button>
				</div>
				<!------------------------button 2----------------------->
				<div class=" col-md-6 py-3">	
					<button type="button" class="btn btn-primary btn-lg btn-block py-3">
						<div class="row">
							<div class="col-md-6 text-left">
								<i class="fas fa-user-plus fa-3x" aria-hidden="true"></i>
							</div>
							
							<div class="col-md-6 text-right">
								
									<h4>3</h4>
									<small>Active Members Request </small>
							
							</div>
						</div>
					
					</button>
					
				</div>
					
					
					
		</div>
		
		
		<div class="row container m-auto">
			
			  <div class="col-md-6 py-3">
					<!------------------------button 3----------------------->
			
					<button type="button" class="btn btn-primary btn-lg btn-block py-3 ">
						<div class="row">
							<div class="col-md-6 text-left">
								<i class="fas fa-user-plus fa-3x" aria-hidden="true"></i>
							</div>
							
							<div class="col-md-6 text-right">
								
									<h4>0</h4>
									<small>Suscription Expired</small>
							
							</div>
						</div>
					</button>
				</div>
				
				<div class=" col-md-6 py-3">	
				<!------------------------button 4----------------------->
					<button type="button" class="btn text-light btn-lg btn-block dark-blue py-3">
						<div class="row">
							<div class="col-md-6 text-left">
								<i class="fas fa-user fa-3x" aria-hidden="true"></i>
							</div>
							
							<div class="col-md-6 text-right">
								
									<h4>1</h4>
									<small>Retired Members</small>
							
							</div>
						</div>
					
					</button>
				</div>
					
					
					
		</div>
		<div class="py-sm-5">
		</div>
		
		<div class=" text-center py-sm-5 py-1">

			<p class= "font-weight-light text-secondary">The Trivandrum Bar Association CRM|Developed By Orisys India
		</div>	
			
			
			

			
</section>
	<!--.......................script started.....................-->
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>


</body>

</html>