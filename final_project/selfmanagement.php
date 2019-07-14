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
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Sign out</a>
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
  </div>
</nav>
<br><br>
<?php
        $connect = new mysqli('localhost','root','','cfg');

$sql = "SELECT * FROM content WHERE contenttype=1";
$result=mysqli_query($connect,$sql);
$yp = "Self Management";
$sq= "update totalviews set totalvisit = totalvisit+1 where page='$yp'";
$updateview = mysqli_query($connect,$sq);

        while($row = mysqli_fetch_assoc($result)){

            ?>
             <center>
        <div class="card" id="3" style="width: 20rem;">
        <div class="card-body">
        <h5 class="card-title"><?php echo $row['contentname']; ?></h5>
        <p class="card-text"><?php echo $row['description']; ?></p>
        <a href="module1.php?id=<?php echo $row['contentid']; ?>"class="btn btn-primary">Start watching</a>
         </div>
        </div>
         </center>
         <br>
         <?php

        }

?>
</html>