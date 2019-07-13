<?php
	$connect = new mysqli('localhost','root','','signup');
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$sql = "SELECT * FROM signup WHERE Name = '$name' and Password = '$pass'";
	$query=mysqli_query($connect,$sql);
      
      	$count = mysqli_num_rows($query);
	if($count == 1) 
	{
		echo "<script>
		alert('Login Sucessful!!');
		</script>";
		
		echo "Welcome  ";
		echo $name;	
		echo "!!!";
		echo "<br><br><br><br>";
		echo "YOUR PREVIOUS ACHIEVEMENTS:";
		$connect = new mysqli('localhost','root','','achievementdatabase');
	
		if($connect)
		{	
			$sql="select * from achievementtable where Name= '$name'";
			$query=mysqli_query($connect,$sql);
			$rowcount=mysqli_num_rows($query);
		}
?>
<table border="1">
<tr>
	<td bgcolor=#FA8072>Name</td>
	<td bgcolor=#FA8072>Achievement title</td>
	<td bgcolor=#FA8072>Date</td>
	<td bgcolor=#FA8072>Description</td>
	<td bgcolor=#FA8072>Subject</td>
	<td bgcolor=#FA8072>Topic</td>
	<td bgcolor=#FA8072>Location</td>
	<td bgcolor=#FA8072>Type of Achievement</td>
	<td bgcolor=#FA8072>Proof</td>
</tr>
<?php
	for($i=1;$i<=$rowcount;$i++)
	{
		$row=mysqli_fetch_array($query);
	?>
	<tr>
	<td><?php echo $row['Name'] ?></td>
	<td><?php echo $row['Achievement title'] ?></td>
	<td><?php echo $row['Date'] ?></td>
	<td><?php echo $row['Description'] ?></td>
	<td><?php echo $row['Subject'] ?></td>
	<td><?php echo $row['Topic'] ?></td>
	<td><?php echo $row['Location'] ?></td>
	<td><?php echo $row['Type of Achievement'] ?></td>
	<td><a href="pdfs/<?php echo $row['Proof'] ?>" target="_blank"><?php echo $row['Proof'] ?></a></td>
	</tr>
	<?php
	}
	?>
	</table>
<?php

}
	else 
	{
         		echo "<script>
		alert('Your username or password is incorrect');
		window.location.href='faculty_login.html';
		</script>";
      	}
?>
<html>
	<br><br><br>
	<input type="button" value="Add an achievement" onclick="window.location.href='a.html'" />
	<input type="button" value="Logout" onclick="window.location.href='home.html'" />
</html>