<html>
  <head>
  <title>Self Awareness</title>
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
 <div class="collapse navbar-collapse " id="navbarNavDropdown">
   <ul class="navbar-nav">
     <li class="nav-item active">
       <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
     </li>
      <li class="nav-item dropdown active">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Videos
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="dropdown-item" href="selfawareness.php">Self awareness</a>
         <a class="dropdown-item" href="selfmanagement.php">Self management</a>
         <a class="dropdown-item" href="sociaawareness.php">Social awareness</a>
         <a class="dropdown-item" href="relationshipbuilding.php">Relationship building</a>
         <a class="dropdown-item" href="rdb.php">Responsible decision building</a>
       </div>
     </li>
   </ul>
   <ul class = "navbar-nav navbar-right">
     <li class="nav-item active">
       <a class="nav-link" href="login.html">Sign Out <span class="sr-only">(current)</span></a>
     </li>
 </div>
</nav>
<br><br><br>
<?php
  $count=5;
  $host="localhost";
  $username="root";
  $password="";
  $databasename="cfg";
  $yp = "sa";
  $conn = new mysqli("localhost","root","","cfg");

  session_start();
  $user_ip = $_SESSION["email"];
  // gets the user IP Address
  $updateview = mysqli_query($conn,"update totalview set totalvisit = totalvisit+1 where page='$yp'");
  $stmt = mysqli_fetch_row(mysqli_query($conn,"select totalvisit from totalview where page='$yp' "));

    while($count>0){
            ?>
             <center>
        <div class="card" id="3" style="width: 20rem;">
        <div class="card-body">
        <h5 class="card-title">Video</h5>
        <p class="card-text">This is a video</p>
        <a href="#" class="btn btn-primary">Start watching</a>
        <p>This page is viewed <?php echo $stmt[0];?> times.</p>

         </div>
        </div>
         </center>
         <br>
         <?php
         $count=$count-1;
        }
?>
</html>
