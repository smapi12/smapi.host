<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>

	</title>

	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		body{
			background-image: url("fluidic-glossy-gradient-background-purple-background-6016x3384-7641.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
			background-attachment: fixed;
		}
		a{
			text-decoration: none;
			color: black;
			text-align: center;
            font-size: 65px;
		}
		a:hover{
			color: white;
			transition: 0.375s;
		}
		#addi{
			float: right;
			width: 75px;
			height: 75px;
			background-color: orange;
			border-radius: 50%;
            position:fixed;
			top: 500px;
			right: 75px;

		}
		#addi:hover{
			color: white;
			transition: 0.375s;
			background-color: green;
		}
		table{
			width: 500px;
			border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.562);
		}
	</style>
</head>
<body>
	<center>

	<br>
<main>

</main>

<br>
<br>
<br>
<br>



	<table>
		<tr>
			<th>username</th>
			<th>password</th>
		</tr>
<?php


	$link = mysqli_connect("localhost","root","","mdb");
	$result = mysqli_query($link , "SELECT * FROM `upiof`;");

	if (mysqli_connect_errno())
{
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
}

while($data = mysqli_fetch_array($result))
{
	print("<tr>");
	print("<td>".$data['username']."</td>");
	print("<td>".$data['password']."</td>");
	print("</tr>");

}
		


?>
	</table>
	</center>
	<footer>
	<div id="addi">
		<center>
	<a href="inputs.html">+</a>
		</center>
	</div>
	</footer>

	<br>
	<br>
	<br>
	<br>
	<br>
	
</body>
</html>
