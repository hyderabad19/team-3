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
        $connect = new mysqli('localhost','root','','cfg');
        $id=$_GET['id'];
$sql = "SELECT * FROM content WHERE contentid like $id";
	$result=mysqli_query($connect,$sql);      
        $row = mysqli_fetch_assoc($result);
            $x1 = $row['vediofile'];
            $x2 = $row['pdftext'];
            $ch = $row['youtube'];
            $v1 = "media\\";
            $v2 ="pdfs\\";
            $res1 = $v2.$x2;
            $res = $v1.$x1;
            //echo $res1;
            //echo $_GET['id'];
            ?> 
             <center>
                 
  <video width="400" height="240" controls>
      <source src="<?php echo $res;?>" type="video/mp4"><br><br><br>    
</video>
           <iframe width="420" height="315"
src="<?php echo $ch;?>">
</iframe>
         </center>
         <br>
 
</html>

