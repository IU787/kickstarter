<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
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
			<a href=""><img src="logo.png" class="w-25"></a>
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" ><i class="fa fa-search"></i> Search</a>
			<a href="acc.php"><img src="lk.png" class="rounded-circle" ></a>
		</div>
	</div> 
	
	<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'kickstarter'); 
		$query = mysqli_query($connect, "SELECT * FROM posts WHERE id = '" . $_GET['id'] . "'");
		$res = $query->fetch_assoc();
	?>
</div>
<div class="col-10 mx-auto mb-5">
	<h4 class="">Change project <span class="text-success font-weight-bold"></span></h4>
	
	<div class="col-8 mx-auto mt-5" style="height: 300px">
		<form method="GET" action="update.php">
			<input type="" name="id" style="display: none" value=" <?php echo $_GET['id']?>">
			<div>
				<input type="" name="title" class="col-12" style="height: 50px" placeholder="Title" value=" <?php echo $res['title']?> ">
			</div>
			<div class="mt-1">
				<input type="" name="description" class="col-12" style="height: 50px" placeholder="Description" value=" <?php echo $res['description']?> ">
			</div>
			<div class="mt-1">
				<input type="" name="goal" class="col-12" style="height: 50px" placeholder="Goal" value=" <?php echo $res['goal']?> ">
			</div>
			<div class="mt-1">
				<input type="" name="img" class="col-12" style="height: 50px" placeholder="Img" value=" <?php echo $res['img']?> ">
			</div>
			<div class="mt-1">
				<input type="" name="place" class="col-12" style="height: 50px" placeholder="Place" value=" <?php echo $res['place']?> ">
			</div>
			<div class="mt-1">
				<input type="" name="user" class="col-12" style="height: 50px" placeholder="User" value=" <?php echo $res['user']?> ">
			</div>
			<button class="bg-success text-center col-10 mt-2" style="background-color: #30a661; color: white; border: none; border-radius: 5%;margin-left: 8%;">Change</button>
		</form>
	</div>
</div>

</body>
</html>