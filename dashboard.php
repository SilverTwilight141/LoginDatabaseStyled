<html lang="en">
<head>
	<style>
		body{
			background-color: darkslategrey;
			color: skyblue;
			 display: flex;
            align-items: center;
            text-align: top;
            justify-content: center;
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
        .logout-btn{
	        color: lime;
            padding: 10px;
            background-color: blue;
            border: solid 2px grey;
            border-radius: 4px;
            cursor: pointer;
            width: 50%;

}
 logout-btn:hover {
            background-color: skyblue;
            color: white;
            cursor: pointer;
 }
	</style>
</head>
<body>
	<div class="container">
		<div class="welcome-msg">
			<h2>Welcome to the Dashboard!</h2>
			<p>Take What you need and What you Want Because There's Nothing Here...</p>
			<p>So What are You Still Doing Here?...Log out</p>
			<a href="logout.php" class="logout-btn"><b>Logout</b></a>
		</div>
	</div>
</body>
</html>