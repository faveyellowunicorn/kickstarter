<?php 
	$connect = mysqli_connect('127.0.0.1', 'root','','kickstarter');
	$text = "SELECT * FROM projects WHERE id = '" .$_GET["id"]. "'";
	$query = mysqli_query($connect, $text);
	$line = $query->fetch_assoc();	
	

	$summ = $line["donated"]+10;
	

	$upd = "UPDATE projects SET donated = '$summ' WHERE id = '" .$_GET["id"]. "'";
	$query2 =  mysqli_query($connect, $upd);

	 header("Location: index.php");


 ?>
