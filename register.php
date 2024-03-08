<?php include 'connection.php' ?>
<?php

if (isset($_POST['submit'])) {
	$users = $_POST['user'];
	$passs = $_POST['pass'];
	$fnames = $_POST['fname'];
	$mnames = $_POST['mname'];
	$lnames = $_POST['lname'];
	$pos = 'Employee';

	$query = "SELECT * FROM `users` WHERE `username` = '$users'";
	$stmts = $conn->prepare($query);
	$stmts->execute();
	$result = $stmts->get_result();
	$row = $result->fetch_assoc();

	if ($users == @$row['Username']) {
		echo "<p class='message'>User is Already Exist</p>";

	}else{

		$sql = "INSERT INTO `users`(`username`, `password`, `Fname`, `Mname`, `Lname`, `Position`) VALUES (?,?,?,?,?,?)";
		$stmt = $conn->prepare($sql);
		$stmt -> bind_param("ssssss",$users,$passs,$fnames,$mnames,$lnames,$pos);
		$stmt->execute();
		echo "<p class='message1'>Registered Succesfully</p>";
	}
	}
?>
<!DOCTYPE html>
<html>
<head>

	<style>
		.message{
	        position: relative;
			font-size: 12px;
			color: red;
		}
		.message1{
			position: relative;
			font-size: 12px;
			color: green;
		}

		body{
			background-color: darkslategrey;
			color: skyblue;
			 display: flex;
            align-items: center;
            justify-content: center;
       	}
		.container{
			border: solid 5px darkblue;
			align-items: center;
			 padding: 10px;
            width: 400px;
            text-align: center;
            box-shadow: 0 5px 20px rgb(27, 4, 238), 0 5px 20px rgb(15, 89, 249) inset, 0 5px 20px rgb(27, 4, 238), 0 5px 20px rgb(15, 89, 249) inset, 0 5px 20px rgb(15, 249, 34),
            0 5px 20px rgb(15, 194, 249) inset, 0 5px 20px rgb(15, 249, 229) inset;
            background-color: black;
            border-radius: 25px;
        }

        .Login-form{
        }

        input[type=text],input[type=password]{
            width: 80%;
            padding: 12px;
            margin: 2px;
            display: inline-block;
            border: 1px solid grey;
            box-sizing: border-box;
            border-radius: 10px;
            background-color: navajowhite;
            color: blue;
        }
  
 	    button[type=submit]{
	        color: lime;
            padding: 10px;
            background-color: blue;
            border: solid 2px grey;
            border-radius: 4px;
            cursor: pointer;
            width: 50%;

        }
        button[type=submit]:hover {
            background-color: skyblue;
            color: white;
            cursor: pointer;
        }
         ::placeholder{
 	        color: blue;
	</style>
</head>
	<body>
		<div class="container">
			<h2>REGISTER</h2>
	<div class="login-form">
		<form action="" method="post" class="form-group">
			<div class="form-group">
				<label for="user"></label><br>
				<input type="text" name="user" id="user" placeholder="Username" required><br><br>
			</div>

				<div class="form-group">
				<label for="pass"></span></label><br>
				<input type="password" name="pass" id="pass" placeholder="Password" required><br><br>
			</div>

			<div class="form-group">
				<label for="fname"></label><br>
				<input type="text" name="fname" id="fname" placeholder="First Name" required><br><br>
			</div>

			<div class="form-group">
				<label for="mname"></label><br>
				<input type="text" name="mname" id="mname" placeholder="Middle Name" required><br><br>
			</div>

			<div class="form-group">
				<label for="lname"></label><br>
				<input type="text" name="lname" id="lname" placeholder="Last Name" required><br><br>
			</div>

			<div class="form-group">
				<button type="submit" name="submit"><b>Register</b></button><br><br>
		</div>
	</div>
</form>
<p>Already Have an Account? <a href="index.php"> Login Here</a></p>
</div>
</div>



<br><br>
</body>
</html>
