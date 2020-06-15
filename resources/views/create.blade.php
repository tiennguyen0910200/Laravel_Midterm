<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 <center>
	<div class="box">
		<form class="form" method="POST" action="/create" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="title" style="float: left; font-size: 18px;"> Name</label>
				<input type="text" class="form-control" name = "name">
			</div>
			<div class="form-group">
				<label > Photo</label>
				<input type="file" class="form-control" name = "img" >
			</div>
			<div class="form-group">
				<label for="title" style="float: left; font-size: 18px;"> Type Tour</label>
				<input type="text" class="form-control" name = "typetour">
			</div>
			<div class="form-group">
				<label for="author" style="float: left; font-size: 18px;"> Schelude</label>
				<input type="text" class="form-control" name = "schelude">
			</div>
			<div class="form-group">
				<label for="author" style="float: left; font-size: 18px;"> Depart</label>
				<input type="text" class="form-control" name = "depart">
			</div>
			<div class="form-group">
				<label for="author" style="float: left; font-size: 18px;"> Number People</label>
				<input type="text" class="form-control" name = "numberPeople">
			</div>
			<div class="form-group">
				<label for="author" style="float: left; font-size: 18px;"> Price</label>
				<input type="text" class="form-control" name = "price">
			</div>
			

			<button type="submit" class="btn btn-warning" style=" font-size: 18px; color:green ;">Submit</button>
		</form>
	</div>
</center>
</body>
</html>