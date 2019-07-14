<?php
session_start();
if(!isset($_SESSION["email"])){
  header("location:na.html");
}
$db = mysqli_connect("localhost", "root", "", "cfg");
// Get data from database
$res = mysqli_query($db,"SELECT page,totalvisit FROM totalview");
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
	       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
	        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" ></script>
	          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" ></script>
		          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <style>
                .c2{
                  background-color: gray;
                  padding: 15px;
                }
              </style>
              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
              <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                      ['page', 'totalvisit'],
                      <?php
                        if(mysqli_num_rows($res) > 0){
                            while($row = mysqli_fetch_assoc($res)){
                              echo "['".$row['page']."', ".$row['totalvisit']."],";
                            }
                          }
                          ?>
                        ]);
              var options = {
                title: 'Most Popular Pages',
                width: 900,
                height: 500,
              };
              var chart = new google.visualization.PieChart(document.getElementById('piechart'));
              chart.draw(data, options);
            }
          </script>
          <style>
          .one{
            float: left;
            }</style>
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
               <a class="nav-link" href="login.html">Sign out</a>
             </li>
             <li class="nav-item active">
               <a class="nav-link" href="feedbackform.html">Feedback</a>
             </li>
             <li class="nav-item dropdown active">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Lessons
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                 <a class="dropdown-item" href="selfawareness.php">Self awareness</a>
                 <a class="dropdown-item" href="selfmanagement.php">Self management</a>
                 <a class="dropdown-item" href="sociaawareness.php">Social awareness</a>
                 <a class="dropdown-item" href="relationshipbuilding.php">Relationship building</a>
                 <a class="dropdown-item" href="rdb.php">Responsible decision building</a>
               </div>
             </li>
             <li class="nav-item active">
               <a class="nav-link" href="search.html">Search New Topic</a>
             </li>
           </ul>
         </div>
       </nav>
    <center>
  <br><br>
  <!-- Display the pie chart -->
     <div id="piechart" ></div>
<div class="card" id="1" style="width: 20rem; ">
  <img class="card-img-top" src="img\sa.jpeg" alt="Card image">
      <div class="card-body">
        <h5 class="card-title">Self awareness</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="selfawareness.php" class="btn btn-primary">Start learning</a>
      </div>
</div>
       </center>
    <br>
     <center>
        <div class="card c2" id="2" style="width: 20rem;">
          <img class="card-img-top" src="img\sms.png" alt="Card image">
            <div class="card-body">
              <h5 class="card-title">Self management</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Start learning</a>
            </div>
          </div>
     </center>
    <br>
    <center>
        <div class="card" id="3" style="width: 20rem;">
          <img class="card-img-top" src="img\social.jpg" alt="Card image">
            <div class="card-body">
                  <h5 class="card-title">Social awareness</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Start learning</a>
            </div>
          </div>
    </center>
    <br>
    <center>
        <div class="card c2" id="4" style="width: 20rem;">
          <img class="card-img-top" src="img\rltn.jpg" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Relationship building</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Start learning</a>
    </div>
</div>
    </center>
    <br>
    <center>
          <div class="card" id="5" style="width: 20rem;">
            <img class="card-img-top" src="img\res.jpg" alt="Card image">

  <div class="card-body">
    <h5 class="card-title">Responsible decision building</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Start learning</a>
  </div>
</div>
    </center>
    <br>
    </body>
</html>
