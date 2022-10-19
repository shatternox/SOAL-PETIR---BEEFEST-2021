<?php session_start();
include "db.php"; 
	
?>
<!DOCTYPE html>
<html lang="en">



<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!-- fQoKCSRpbnB1dCA9ICRfUE9TVFsndGVzdF9hZG1pbl9wYXJhbWV0ZXJfNTY0MjUzNDInXSA/PyAnJzsKCSR0ZXN0X2ZlYXR1cmUgPSB1bnNlcmlhbGl6ZSgkaW5wdXQpOwoKCSR3cml0ZXIgPSBuZXcgQWRtaW5GZWF0dXJlczsKCgo/Pg== -->
	<title>The Quotes</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	<style type="text/css">
		.gambar{
			text-align: center;
			width: 300px;
			margin-bottom: 20px;
		}
	</style>

</head>

<body style="background: yellow; padding: 2%;" id="bodeh">


	<div id="notfound">
		<div class="notfound">

			<div style="margin-top: 20px;">
				<h3 style="color:black; top: 30px;">Your vote has been recorded</h3>
				<h3 style="color:black; top: 30px;">Thank you for the vote!</h3>
				<br>
				<?php

					$f_pointer = fopen("result/".$_SESSION['filename'], "r");
					$data = fread($f_pointer, filesize(__DIR__."/result/".$_SESSION['filename']));

					echo "<h4>You vote for <u>{$data}</u></h4>";

					echo "<br>";

					echo "<h4>Data taken from {$_SESSION['filename']}</h4>";

				?>
			
		</div>
		<br>
		<h5><a href="index.php">Back to home</a></h5>

	</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>



