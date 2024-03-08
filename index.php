<?php include 'connection.php' ?>
<?php

if(isset($_POST['submit'])){
	$users = $_POST['user'];
	$passs = $_POST['pass'];

	$sql = "SELECT * FROM 	`users` WHERE `Username` = ? AND `Password` = ?";
	$stmt = $conn->prepare($sql);
	$stmt -> bind_param("ss",$users,$passs);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();

	if ($passs != @$row['Password'] && $users != @$row['Username']) {
		echo "<p class='message'>Incorrect Credentials, Try Again!</p>";
	}else{
		header("Location:dashboard.php");
	}
	
	

}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN FORM</title>
	<style>
		.message{
			position: absolute;
			font-size: 12px;
			color: red;
		}
		body{
			background-color: darkslategrey;
			color: skyblue;
			 display: flex;
            align-items: top;
            text-align: left;
            justify-content: center;
            height: 80vh;
            padding-top: 5%;
		}
		.Login-form{
			
			
			
		}
		.container{
			border: solid 5px darkblue;
			align-items: center;
			 padding: 20px;
            width: 400px;
            text-align: center;
            box-shadow: 0 5px 20px rgb(27, 4, 238), 0 5px 20px rgb(15, 89, 249) inset, 0 5px 20px rgb(27, 4, 238), 0 5px 20px rgb(15, 89, 249) inset, 0 5px 20px rgb(15, 249, 34),
            0 5px 20px rgb(15, 194, 249) inset, 0 5px 20px rgb(15, 249, 229) inset;
            background-color: black;
            border-radius: 25px;

          
            }		
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
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
 }
 input[type=checkbox]{
 	width: 25px;
 }
	</style>
</head>
<body>
	<div class="container">
		<h2 style="text-align: center;">SIGN IN</h2>
<div class="login-form">
	
	<form method="post" class="form-group">
		<div class="form-group">
			<label for="user"></label>
			<i class="fa-solid fa-envelope"></i>
			<input type="text" name="user" placeholder="USERNAME" required><br><br>
        </div>

        	<div class="form-group">
        		<label for="pass"></label>
        		 <i class="fa-solid fa-lock"></i>
			<input type="password" name="pass" id="password" placeholder="PASSWORD" required><br><br>
			<input type="checkbox" onclick="myFunction()">Show Password
        </div>

        	<div class="form-group">
			<button type="submit" name="submit"><b>LogIn<b></button>

		</div>
	</form>
	<br><br>
	<div class="text-center">
		<span class="small"> </span><p>Not have an Account? <a class="font-weight-bold small" href="register.php">REGISTER</a></p><br><br>
	</div>
</div>
 <script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
   
</script>
</body>
</html>