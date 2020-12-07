<meta charset="utf-8">
<?php 
$connect = mysqli_connect('127.0.0.1', 'root','','kickstarter');
$query = mysqli_query($connect, "SELECT * FROM projects user WHERE id = '" .$_GET["id"]. "'");
for ($i=0; $i < $query->num_rows; $i++) { 
		$line = $query->fetch_assoc();
 ?>
 <?php 
	}
  ?>
