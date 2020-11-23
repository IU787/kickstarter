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
<div class="col-4 mx-auto">
	<form method="GET" action="insert.php">
		<div>
			<input type="" class="col-12 mt-1" name="title" placeholder="Title" style="border-radius: 5%">
		</div>
		<div>
			<input type="" class="col-12 mt-1" name="description" placeholder="Description" style="border-radius: 5%">
		</div>
		<div>
			<input type="" class="col-12 mt-1" name="goal" placeholder="Goal" style="border-radius: 5%">
		</div>
		<div>
			<input type="" class="col-12 mt-1" name="img" placeholder="Img" style="border-radius: 5%">
		</div>
		<div>
			<input type="" class="col-12 mt-1" name="place" placeholder="Place" style="border-radius: 5%">
		</div>
		<div>
			<input type="" class="col-12 mt-1" name="user" placeholder="User" style="border-radius: 5%">
		</div>
		<button class="text-center mx-auto col-12 mt-3" style="background-color: #30a661; color: white; border: none; border-radius: 5%">Upload</button>
	</form>
	<p class="mx-auto" style="color:red"><?php echo  $_GET["error"] ?></p>
</div>
	<?php 
		$con = mysqli_connect('127.0.0.1', 'root', '', 'kickstarter'); 
		$query = mysqli_query($con, "SELECT * FROM posts");
		
	?>
<div class="col-10 mx-auto">
	<h4 class="">My projects <span class="text-success font-weight-bold"><!--Вывести количество проектов-->
		<?php echo $query->num_rows ?>
	</span></h4>
	<p></p>
		<?php 
	 		for($i=0;$i<$query->num_rows;$i++){
	 			$res = $query->fetch_assoc();
	 	?>	
		<!--Вывести сами проекты здесь-->
		<div class="col-8 mx-auto  py-4 pb-4">
			<h1 style="text-align: center;"><?php echo $res['title']; ?></h1>
			<p class="font-weight-light" style="text-align: center;"><?php echo $res['description']; ?></p>
			<div class="row">
				<div class="col-8" style=" background-image: url(<?php echo $res['img'] ?>); background-size: 100% 100%; background-position: center; height: 350px">
				</div>
			<div class="col-4">			
				<div class="mt-1" >
					<h1 style="color: green"><?php echo "US$ " .$res['donated'] ; ?></h1>
					<h3>Pledged of</h3>
					<h1><?php echo "US$ " .$res['goal'] ; ?></h1>
				</div>
				<form method="GET" action="change.php">
					<input type="" name="id" style="display: none" value=" <?php echo $res['id']?>">
					<button class="text-center mx-auto col-6 mt-3" style="background-color: #30a661; color: white; border: none; border-radius: 5%">Edit</button>
				</form>
				<form method="GET" action="delete.php">
					<input type="" name="id" style="display: none" value=" <?php echo $res['id']?>">
					<input type="" name="user" style="display: none" value=" <?php echo $res['user']?>">
					<button class="text-center mx-auto btn-danger col-6 mt-3" style=" color: white; border: none; border-radius: 5%">Delete</button>
				</form>
			</div>
			</div>
		</div>

		<?php 
	 		} 
	 	?>

</div>
</body>
</html>