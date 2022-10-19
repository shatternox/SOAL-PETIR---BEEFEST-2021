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
				<h3 style="color:black; top: 30px;">Welcome</h3>
				<h3 style="color:black; top: 30px">To The Quotes</h3>
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
				<input type="submit" name="submit" value="SUBMIT" class="btn btn-info">
			</form>
			<br>
			<br>
			<br>
			<?php 

				if(isset($_POST['submit'])){
					$id = $_POST['quotes_id'];

					$query = "SELECT author,quotes FROM quotes WHERE quotes_id = ?";
					$stmt = mysqli_stmt_init($connect);

					if(!mysqli_stmt_prepare($stmt, $query)){
			            die("Statement Failed, ". mysqli_error($connect));
			        } else {
			            
			            mysqli_stmt_bind_param($stmt, "s", $id);
			            
			            mysqli_stmt_execute($stmt);


			            $data = mysqli_stmt_get_result($stmt);

			            if(!$data){           
                        	die("Error!");
                        } else {
                        	$count = mysqli_num_rows($data);

                        	if ($count == 0){
                                echo "<h3> NO RESULT </h3>";
                            } else {
                            	$result = mysqli_fetch_assoc($data);

					            $author = $result['author'];
								$quotes = $result['quotes'];

								echo '<h2 style="color: black;">'.$quotes. '</h2>';
								echo '<h3 style="color: black;">'.$author. '</h3>';

								switch ($id) {
									case '1':
										echo '<img src="images/albert.jpg" class="gambar"/>';
										break;

									case '2':
										echo '<img src="images/karl.jpg" class="gambar"/>';
										break;

									case '3':
										echo '<img src="images/ralph.jpg" class="gambar"/>';
										break;

									case '4':
										echo '<img src="images/phytagoras.jpg" class="gambar"/>';
										break;
									case '5':
										echo '<img src="images/aristotle.jpg" class="gambar"/>';
										break;
									case '6':
										echo '<img src="images/lenin.jpg" class="gambar"/>';
										break;
									case '7':
										echo '<img src="images/thomas.jpg" class="gambar"/>';
										break;
									case '8':
										echo '<img src="images/plato.jpg" class="gambar"/>';
										break;
									case '9':
										echo '<img src="images/herodotus.jpg" class="gambar"/>';
										break;
									case '10':
										echo '<img src="images/alexander.jpg" class="gambar"/>';
										break;

									
									default:
										echo '<h2>Read all of the quotes and pick your favourites!</h2>';
										break;

                            }

                        }


				        }

						echo "<br>";
						echo "<br>";
						echo "<h4><a href='vote.php'>Click here to vote now!</a></h4>";

					
					} 
					

				} else {

					echo '<h2>~~ Let The Quotes Insprires You ~~</h2>';
					echo '<h2>Read all of the quotes and pick your favourites!</h2>';

				}


			?>

			

			
		</div>
	</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

<!-- 
aW5pX3NldCgnZGlzcGxheV9zdGFydHVwX2Vycm9ycycsIDEpOwplcnJvcl9yZXBvcnRpbmcoRV9BTEwpOwoKCgljbGFzcyBBZG1pbkZlYXR1cmVzCgl7CgoJCXB1YmxpYyAkbG9nX2ZpbGUgPSAnJzsKCQlwdWJsaWMgJGF1dGhvcl9uYW1lID0gJyc7CgkJCQkJCgkJcHVibGljIGZ1bmN0aW9uIF9fY29uc3RydWN0KCkKCQl7CgoJCQkkdGhpcy0+ZGljdF9kYXRhID0gWycxJyA9PiAnQWxiZXJ0IEVpbnN0ZWluJywgJzInID0+ICdLYXJsIE1hcngnLCczJyA9PiAnUmFscGggV2FsZG8gRW1lcnNvbicsJzQnID0+ICdQaHl0YWdvcmFzJywnNScgPT4gJ0FyaXN0b3RsZScsJzYnID0+ICdWbGFkaW1pciBMZW5pbicsJzcnID0+ICdUaG9tYXMgQWx2YSBFZGlzb24nLCc4JyA9PiAnUGxhdG8nLCc5JyA9PiAnSGVyb2RvdHVzJywnMTAnID0+ICdBbGV4YW5kZXIgdGhlIEdyZWF0J107CgoJCQkkdGhpcy0+bG9nX2ZpbGUgPSAndm90ZV9yZXN1bHQudHh0Jzs=
 -->