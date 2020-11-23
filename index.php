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
			<a href="index.php" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href="acc.php"><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
	<?php 
		$con = mysqli_connect('127.0.0.1', 'root', '', 'kickstarter'); 
		$query = mysqli_query($con, "SELECT * FROM posts");
		
	?>
<div class="col-10 mx-auto">
	<h4 class="">Explore <span class="text-success font-weight-bold"><!--Вывести количество проектов-->
		
	</span></h4>
	<p></p>
	<div class="row mt-5">
		<?php 
	 		for($i=0;$i<$query->num_rows;$i++){
	 			$res = $query->fetch_assoc();
	 	?>	
		<!--Вывести сами проекты здесь-->
		<div class="col-4  py-4 pb-4">
			<div class="col-12" style=" background-image: url(<?php echo $res['img'] ?>); background-size: 100% 100%; background-position: center; height: 350px">
			</div>
			<div>
				<p class="text-uppercase text-bold "><?php echo $res['title']; ?></p>
				<p class="font-weight-light"><?php echo $res['description']; ?></p>
			</div>
			<div class="mt-5" >
				<p class="font-weight-light"><?php echo "by " .$res['user'] . ", " .  $res['place']; ?></p>
			</div>
			<div class="mt-1" >
				<p class="font-weight-light"><?php echo "pledged of US$ " .$res['goal'] ; ?></p>
				<p class="font-weight-light" style="color: #30a661"><?php echo "US$ " .$res['donated'] ; ?></p>
			</div>
			<form method="GET" action="donate.php">
				<input type="" name="id" style="display: none" value=" <?php echo $res['id']  ?>">		
				<button class="text-center mx-auto" style="background-color: #30a661; color: white; border: none;">Back this project</button>
			</form>
			
		</div>

		<?php 
	 		} 
	 	?>
	</div>

</div>
</body>
</html>