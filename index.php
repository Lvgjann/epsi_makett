<?php 
require('app/Autoload.php')
if(empty($_SESSION['user'])){
	header('location: connexion.php');
}
?>
<!DOCTYPE html>
<html>
<title>Acceuil</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="twitter-feed.css" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="twitter-feed.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/mainStyle.css">

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-3">
				<div class="Sidebar">	
					<div class="row">
						<img id="userimage" src="phoenix.png" alt=""> JOHN DOE
					</div>
					<div class="row">
						<ul id="sidebarList">
							<li >
						    	<a class="SidebarComponent" href="index.php">Acceuil</a>
						  	</li>
						  	<li >
						   		<a class="SidebarComponent" href="#">Déconnexion</a>
						  	</li>
				  		</ul>
					</div>
				</div>
			</div>
			<div class="col-9">
				<div class="HeadBar">
					<ul class="nav nav-pills">
					  	<li class="nav-item">
					    	<a class="nav-link active" href="#">Développeurs</a>
					  	</li>
					  	<li class="nav-item">
					    	<a class="nav-link" href="#">Réseaux</a>
					  	</li>
					  	<li class="nav-item">
					   		<a class="nav-link" href="#">Administration</a>
					  	</li>
				  	</ul>		
				</div>
					 <div class="form-group">
					    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Quoi de neuf ?"></textarea>
					 </div>
					<div class="panel panel-danger"></div>
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-twitter-square" aria-hidden="true"></i>
						Timeline
						</h3>
					</div>
				
			</div>			
		</div>
	</div>

<body>
</html>