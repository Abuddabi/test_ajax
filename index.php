<?php 
	function out($arg, $method = 1)
	{
		echo "<pre>";
		if ($method === 1) var_dump($arg);
		else print_r($arg);
		exit;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form id="contactform" method="post" action="SubscribeController.php">
		<div class="alert alert-success">
			<!-- {{session('status')}} -->
		</div>
		<!-- @endif
		@if($errors->any()) -->
		<div class="alert alert-danger">
			<!-- <ul> -->
				<!-- @foreach($errors->all() as $error)//Выводил ошибки когда небыло аякса -->
				<!-- <li>{{ $error }}</li> -->
				<!-- @endforeach -->
			<!-- </ul> -->
		</div>
		<!-- @endif -->
		<div id="тут хочу выводит сообщение с аякса"></div>
		<!-- {{csrf_field()}} -->
		<div class="form-group">
			<label for="name">Name</label><br>
			<br><input type="text" name="name" placeholder="Enter your Name" id="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">Email</label><br>
			<br><input type="text" name="email" placeholder="Enter your Email" id="email" class="form-control">
		</div>
		<div class="form-group">
			<label for="phone">Phone</label><br>
			<br><input type="text" name="phone" placeholder="Enter your Phone" id="phone" class="form-control">
		</div>
		<div class="form-group">
			<label for="msg">Message</label><br>
			<br><input type="text" name="msg" placeholder="Enter your Message" id="msg" class="form-control">
		</div>
		<button type="contactform" id="test_id" class="btn btn-succes">Submit</button>
	</form>
	
	<script
		src="https://code.jquery.com/jquery-3.5.1.min.js"
		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		crossorigin="anonymous"></script>
	<script src="script.js"></script>
</body>
</html>






