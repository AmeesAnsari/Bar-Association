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
	
	<div class="">
	
	<header class="">
	
		<div class="dark-blue">
					
		
			
					

	<ul class="nav nav-pills  py-2" id="pills-tab" role="tablist">
	
		 <li class="nav-item">
			<a class="nav-link text-white" id="pills-profile-tab" data-toggle="pill" href="admin-dash.php" role="tab" aria-controls="pills-profile" aria-selected="false "><i class="fa fa-dashboard px-2"></i>Dashboard</a>
		  </li>
		  
		  <li class="nav-item">
			<a class="nav-link text-white" id="pills-profile-tab" data-toggle="pill" href="member-list.php" role="tab" aria-controls="pills-profile" aria-selected="false " ><i class="fa fa-user px-2"></i>Members</a>
		  </li>
		  
		  <li class="nav-item">
			<a class="nav-link text-white" id="pills-contact-tab" data-toggle="pill" href="excel-upload.php" role="tab" aria-controls="pills-contact" aria-selected="false" ><i class="fa fa-upload px-2"></i>Excel Upload</a>
		  </li>
	  
	</ul>
	
			<div class="tab-content" id="pills-tabContent">
			  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"></div>
			  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"></div>
			  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
			</div>
								

							
						
					
		</div>
	
		
</header>
</div>
		<div class="container-fluid my-5">
			<h4 class="font-fam ">Members List</h4>
			<!-------------------------------------------- select tags-------------------------------->
			<div class="container-fluid">
			
			
			
			
			<nav class="navbar navbar-expand-lg navbar-expand-md">
 
 
  <div class="align-nav">
    <ul class="navbar-nav">
      <li class="nav-item mx-2">
					
					<div class="form-group">
				<select class="form-control px-5 align-nav" id="exampleFormControlSelect1">
				<option class="">select</option>
				<option>2</option>
				
				</select>
				</div>
					
		</li>
      <li class="nav-item mx-2">
	  <div class="form-group">
				<select class="form-control px-2 align-nav" id="exampleFormControlSelect1">
				<option class="">select</option>
				<option>2</option>
				
				</select>
				</div>
        
      </li>
      <li class="nav-item mx-2">
	  
	  
	  <div class="form-group">
				<select class="form-control px-5" id="exampleFormControlSelect1">
				<option class="">Kerala</option>
				<option>2</option>
				
				</select>
				</div>
        
		
      </li>
      <li class="nav-item mx-2">
	  
	  <div class="form-group">
				<select class="form-control px-5" id="exampleFormControlSelect1">
				<option class="">District</option>
				<option>2</option>
				
				</select>
				</div>
       
      </li>
	  
	   <li class="nav-item mx-2">
	  
	  <div class="form-group">
				<select class="form-control px-4" id="exampleFormControlSelect1">
				<option class="">Area of Expertise</option>
				<option>2</option>
				
				</select>
				</div>
       
      </li>
	  
	   <li class="nav-item mx-2">
	  
	  <div class="form-group">

			<input type="text" class="form-control"  placeholder="Name,Email or Mobile">
		</div>
       
      </li>
	  
	   <li class="nav-item mx-2">
	  
		<button class="btn btn-primary">Electoral</button>
       
      </li>
	  
    </ul>
  </div>
</nav>
			
			
			</div>
		
			
		<!---------------------------------------show entries------------------------------------>
		<div class="container-fluid">
		<div class="card">
			<div class="card-body">
					<div>
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
		
		<!-----------------------------------------table starts-------------------------------------------->
	<div style="overflow-x:auto;">
		<table class="table table-bordered">
					
					<thead>
					<tr>
					<th scope="col">Si.No.</th>
					<th scope="col">Name</th>
					<th scope="col">Enrollment ID</th>
					<th scope="col">Email</th>
					<th scope="col">Mobile</th>
					<th scope="col">Area of expertise</th>
					<th scope="col">Vehicle Number-1</th>
					<th scope="col">Vehicle Numer 2</th>
					<th scope="col">Action</th>
      
					</tr>
					</thead>
				</table>
	</div>
			
		
		
			</div>
		</div>
		</div>
		
		
		
		</div>
	</body>
</html>