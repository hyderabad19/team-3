<html>
        <head>
        <title>Responsive decision building</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" ></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" ></script>	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
    <body>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Learning Curve.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Sign out</a>
      </li>
    
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Videos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#1">Self awareness</a>
          <a class="dropdown-item" href="#2">Self management</a>
          <a class="dropdown-item" href="#3">Social awareness</a>
          <a class="dropdown-item" href="#4">Relationship building</a>
          <a class="dropdown-item" href="#5">Responsible decision building</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<?php
        //$connect = new mysqli('localhost','root','','cfg');
	//$sql = "SELECT * FROM content WHERE id=1";
	//$query=mysqli_query($connect,$sql);      
      	//$count = mysqli_num_rows($query);
$count=5;
        while($count>0){
            ?>
             <center>
        <div class="card" id="3" style="width: 20rem;">  
        <div class="card-body">
        <h5 class="card-title">Video</h5>
        <p class="card-text">This is a video</p>
        <a href="#" class="btn btn-primary">Start watching</a>
         </div>
        </div>
         </center>
         <br>
         <?php
         $count=$count-1;
        }         
   
?>
</html>

