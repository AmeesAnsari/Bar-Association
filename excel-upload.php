<!DOCTYPE html>
<html>
	<head>
		<title>
		</title>
		<meta charset="utf-8">
		<meta name="viewport"content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css1/style.css">
	</head>
	<body>
	<!----------------------------------------------------------first header-------------------------------------->
	<section>
		<header>
			<div class="container-fluid bg-white">
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
	<!----------------------------------------------------------2nd header-------------------------------------->
	<header class="">
	<div class="">
		<div class="dark-blue">
					
		
			
					

	<ul class="nav nav-pills  py-2" id="pills-tab" role="tablist">
	
		 <li class="nav-item">
			<a class="nav-link text-white"href="admin-dash.php" ><i class="fa fa-dashboard px-2"></i>Dashboard</a>
		  </li>
		  
		  <li class="nav-item">
			<a class="nav-link text-white"  href="member-list.php" ><i class="fa fa-user px-2"></i>Members</a>
		  </li>
		  
		  <li class="nav-item">
			<a class="nav-link text-white"  href="excel-upload.php" ><i class="fa fa-upload px-2"></i>Excel Upload</a>
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
		<div class="container py-5">
			<h4 class="font-fam">Excel Upload</h4>
			<!-------------------------------------------- card body-------------------------------->
			<div class="conainer">
			<div class="card">
			
				<div class="card-body">
				<div class="row">
					<div class="col-md-6">
					<input type="file" class="mb-md-5">
					
					<button type="button" class="btn btn-danger">Upload</button>
					</div>
					<div class="col-md-6 text-right">
					<button type="button" class="btn btn-success">Download Excel Format</button>
					
					</div>
				</div>
				
				</div>
			</div>
			</div>
			
			
		<!---------------------------------------show entries------------------------------------>
		<div class="container">
		<div class="my-4">
		<div class="row">
			<div class="col-md-1"><p class="font-fam mt-2">Show</p>
			</div>
			<div class="col-md-1">
			
				<div class="form-group">
				<select class="form-control" id="exampleFormControlSelect1">
				<option>1</option>
				<option>2</option>
				
				</select>
				</div>
			</div>
			<div class="col-md-1"><p class="font-fam  mt-2">Entries</p>
			</div>
		</div>
		</div>
		</div>
		<!-----------------------------------------2nd card----------------------------------------->
		<div class="contaier">
		<div class="card">
			<div class="card-body">
				<table class="table table-bordered">
					
					<thead>
					<tr>
					<th scope="col">Si.No.</th>
					<th scope="col">File Name</th>
      
					</tr>
					</thead>
				</table>
			</div>
		</div>
		</div>
		
		
		
		</div>
		
		
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>


	</body>
</html>