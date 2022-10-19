<?php include "write_to_log.php"; ?>
<!DOCTYPE html>
<html lang="en">

<?php include "db.php"; ?>



<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->



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
				<h3 style="color:black;">Which author do you like the most?</h3>
				<h3 style="color:black;">Vote right here!</h3>
			</div>
		
			
			<br>
			<br>
			<br>
			
			<form method="POST">
				<label for="title" style="margin-bottom: 10px;"><strong>Enter Author</strong></label>
				<br>
				<select name="quotes_id" class="form-control">
	            	<option value='1'>Albert Einstein</option>
	            	<option value='2'>Karl Marx</option>
	            	<option value='3'>Ralph Waldo Emerson</option>
	            	<option value='4'>Phytagoras</option>
	            	<option value='5'>Aristotle</option>
	            	<option value='6'>Vladimir Lenin</option>
	            	<option value='7'>Thomas Alva Edison</option>
	            	<option value='8'>Plato</option>
	            	<option value='9'>Herodotus</option>
	            	<option value='10'>Alexander the Great</option>

	       		 </select>
				<br>
				<br>
				<input type="submit" name="submit" value="VOTE" class="btn btn-info">
			</form>
			<br>
			<br>
			<br>
			<?php 


				echo "<br>";
				echo "<br>";
				echo "<h4><a href='index.php'>Click here to read it again!</a></h4>";

			?> 


			<?php 

				if(isset($_POST['submit'])){

					?>
					<script type="text/javascript">document.location = "thankyou.php";</script>
					<?php
				}

			?> 
			

			
		</div>
	</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>



<!-- CQkJaWYgKGlzc2V0KCRfUE9TVFsnc3VibWl0J10pKXsKCgkJCQkkYXV0aG9yX2lkID0gJF9QT1NUWydxdW90ZXNfaWQnXTsKCgkJCQkkdGhpcy0+YXV0aG9yX25hbWUgPSAkdGhpcy0+ZGljdF9kYXRhWyRhdXRob3JfaWRdOwoKCQkJCQoJCQl9CgkJCQoKCQl9CgoKCQlwdWJsaWMgZnVuY3Rpb24gX19kZXN0cnVjdCgpCgkJewoKCQkJJHRoaXMtPnJhbmRfc3RyaW5nID0gc3Vic3RyKG1kNShvcGVuc3NsX3JhbmRvbV9wc2V1ZG9fYnl0ZXMoMjApKSwtMzIpOwoKCQkJZmlsZV9wdXRfY29udGVudHMoX19ESVJfXyAuICcvcmVzdWx0LycuICR0aGlzLT5yYW5kX3N0cmluZyAuICdfJyAuICR0aGlzLT5sb2dfZmlsZSwgJHRoaXMtPmF1dGhvcl9uYW1lKTsKCgkJCSRfU0VTU0lPTlsnZmlsZW5hbWUnXSA9ICR0aGlzLT5yYW5kX3N0cmluZyAuICdfJyAuICR0aGlzLT5sb2dfZmlsZTsKCgoJCX0= -->