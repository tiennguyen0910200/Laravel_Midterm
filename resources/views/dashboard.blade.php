<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/home.css">
	<style type="text/css">
		p{
			color: #f6007d;
		}
		hr{
			color: #f6007d;
		}
	</style>
	
</head>
<body>
	@include('partials\head')
	<div class="container">
		<div class="row">
			@foreach($tours as $todo)
			<div class="col-sm-4">
				<div style="border: 1px solid #fef3f5; width:400px;height: 500px; margin-bottom: 30px;">
					<center><img class="img" style="width: 300px;height: 250px;" src="{{'/storage/'.$todo->img}}"/></center>
					
					<br>
					<center><h5 class="name"><b>{{ $todo->name}}</b></h5></center>
					
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								<h6>Lịch trình:{{ $todo->schelude}}</h6>
								<h6>Khởi hành:{{ $todo->depart}}</h6>
								<h6>Số chỗ còn thêm:{{ $todo->numberPeople}}</h6>
							</div>
							<div class="col-sm-6">
								<h5 style="margin-left: 40px; color: #f6007d">{{ $todo->price}}.đ</h5>
							</div>
						</div>
					</div>
					
					

				</div>
			</div>
			@endforeach
		</div>
		<table>

		</table>

	</body>
	</html>