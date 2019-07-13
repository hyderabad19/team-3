<?php
	$connect = new mysqli('localhost','root','','cfg');
	$name1 = $_POST['name1'];
	$list1 = $_POST["list1"];
	if($connect->connect_error)
	{
		die("connection failed".$connect->connect_error);
	}
	$file=$_FILES["myfile"]["name"];
		$file_size = $_FILES['myfile']['size'];
		$tmp_name=$_FILES["myfile"]["tmp_name"];
		$path="pdfs/".$file;
		$file1=explode(".",$file);
		$ext=$file1[1];
		$allowed=array("pdf");
		if(in_array($ext,$allowed))
		{
			move_uploaded_file($tmp_name,$path);
		}
	$file3=$_FILES["pic"]["name"];
		$file_size = $_FILES['pic']['size'];
		$tmp_name=$_FILES["pic"]["tmp_name"];
		$path="videos/".$file3;
		$file2=explode(".",$file3);
		$ext=$file2[1];
		$allowed=array("mp4");
		if(in_array($ext,$allowed))
		{
			move_uploaded_file($tmp_name,$path);
		}
		$sql="insert into content (contentname,contenttype,pdftext,vediofile) values ('$name1','$list1','$file','$file3')";
		echo $sql;
		if($connect->query($sql)==TRUE)
		{
			echo "sucess";
			die();
		}
		else
		{
			echo $connect->error;
		}
	
	
	echo "Data sucessfully added<br>";
	echo "<br><strong>PROOF</strong> : <a href='pdfs/$file' target='_blank'><br>$file</a><pre></pre>";