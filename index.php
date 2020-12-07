<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="acc.php" > <i class="fa fa-search"></i> Search</a>
			<a href="acc.php"><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<?php 
	$connect = mysqli_connect('127.0.0.1', 'root','','kickstarter');
	$sel = "SELECT * FROM projects";
	$query = mysqli_query($connect, $sel);
 ?>
   
<div class="col-10 mx-auto">
	<h4 class="">Explore <span class="text-success font-weight-bold"><!--Вывести количество проектов--></span></h4>
	<p></p>
	<div class="row mt-5">
		<?php 
			for ($i=0; $i < $query->num_rows; $i++) { 
			$line = $query->fetch_assoc();	
			?>
		 
		
	
		 <div class="col-4  border border-success">
		 	
		 	<?php 
			echo   "<img class = 'w-100' src = '"	.$line["img"]. " '></img>";
			?>
		 	<h5><?php echo $line['title']; ?></h5>
		 	<p><?php echo $line['description']; ?></p>
		 	<p><?php echo $line['goal']; ?>$ goal</p>
		 	<p><?php echo $line['donated']; ?>$ pledged</p>
		 	

		 	<form action="updateDonate.php" method="GET">
			<input type="hidden" name="id" value="<?php echo $line['id'] ?>">
			<button class="btn btn-success"><p class="text-white">donate</p></button>
			</form>

		 </div>
		 <?php 
		 	}
		  ?>
		<!--Вывести сами проекты здесь-->

	</div>

</div>
</body>
</html>