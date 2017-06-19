<!DOCTYPE html>
<head>
	<title>Glass Pearl</title>
	<link rel="stylesheet" href="styling/main.css">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans|Quicksand:300" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> <!-- js functions require Ajax -->
    <script src="javascript/main.js"></script>
	<body>

		<?php include 'includes/header.php';?>
		
		<div class="cardWrapper" id="featureWrapper">
			<div class="card" id="feature"></div>
		</div>

		<div class="cardWrapper">
			<div class="card" id="assorted">
				<div class="card" id="article1"></div>
				<div class="card" id="article2"></div>
			</div>
		</div>

		<div class="cardWrapper">
			<div class="card" id="assorted">
				<div class="card" id="article3"></div>
				<div class="card" id="article4"></div>
			</div>
		</div>

		<div class="cardWrapper" id="section3">
			<div class="card" id="bigFinish">
				<div class="card" id="article5"></div>
				<div class="card" id="sponsored"></div>
			</div>
		</div>

		<div id="pusher"></div>

		<?php include 'includes/footer.php';?>


	</body>
</html>
