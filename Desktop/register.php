<?php
	$connect = new mysqli('localhost','root','','signup');
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$sql="insert into signup values('$name','$pass')";
	$query=mysqli_query($connect,$sql);
	echo "<script>
		alert('Signup Sucessful!!');
		window.location.href='faculty_login.html';
		</script>";
?>