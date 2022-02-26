<?php 

session_start();

	include("connection1.php");
	include("functions1.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: home.php");
						die;
					}
				}
			}
			
			echo "<script type='text/javascript'>alert('wrong password or username');
				window.location='login1.php';
				</script>";
		}else
		{
			echo "<script type='text/javascript'>alert('wrong password or username');
			window.location='login1.php';
			</script>";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<style type="text/css">
		
	body
	{
		background:#f5f5f5;
		font-family: 'Poppins', sans-serif;
	}
	
	#text
	{

		height: 40px;
		border-radius:5px;
		padding: auto;
		border: solid thin #aaa;
		width: 98%;
	}

	#button
	{

		padding: 10px;
		width: 110px;
		color: white;
		background-color: #777;
		border: round;
	}
	#button:hover
	{
    background: #444;
    color:#fff;
}

	#box 
	{
		
		display: block;
  		margin-left: auto;
  		margin-right: auto;
		background-color: #16a085;
		margin-top: 10%;
		width: 300px;
		padding: 20px;
		border-radius:15px;
	}
	.oi{
		display:flex;
	}
	.oi>div{
		padding:10px;
		margin:10px;
		
	}
	#button a{
		text-decoration:none;
		color:white;
	}

	</style>

</head>
<body>

	
	<div id="box">
		
		<form method="post">
			
			<div style="font-size: 20px;margin: 10px;color: white; text-align:center;">Login</div>
				
			<br>
			<input id="text" type="text" name="user_name" placeholder=" user name" required><br><br>
			<input id="text" type="password" name="password" placeholder=" password" required><br><br>
			<div class="oi">
			<div><input id="button" type="submit" value="Login"><br><br></div>
			<div><button type="button" id="button"><a href="signup1.php">Click to Signup</a></button><div>
			</div>

		</form>
	</div>
</body>
</html>