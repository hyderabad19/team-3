<?php
session_start();
if(!isset($_SESSION["email"])){
  header("location:na.html");
}
$db = mysqli_connect("localhost", "root", "", "cfg");
// Get data from database
$res = mysqli_query($db,"SELECT page,totalvisit FROM totalviews");
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
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
                title: 'Most Popular Modules',
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
                 <a class="nav-link" href="admindashboard.html">Upload Content</a>
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
  <h3>DATA ANALYTICS-Most viewed modules</h3>
     <div id="piechart" ></div>

    <br>
    </body>
</html>