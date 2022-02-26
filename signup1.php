<?php 
session_start();

	include("connection1.php");
	include("functions1.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$sp=$_POST['sp'];
		$password = $_POST['password'];
		$query= "select * from users WHERE user_name='$user_name'"; 
		$query_run= mysqli_query($con,$query); //returns a record maybe empty or already exist
        if (mysqli_num_rows($query_run)>0)
        {
			echo "<script type='text/javascript'>alert('User already exist');
				window.location='signup1.php';
				</script>";

		}
		else if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($email) && !empty($gender) && !empty($sp) && (mysqli_num_rows($query_run)==0))
		{
			
			//save to database
			$query = "insert into users (user_name,email,gender,sp,password) values ('$user_name','$email','$gender','$sp','$password')";

			mysqli_query($con, $query);
			header("Location: login1.php");
			die;
		}else
		{
			echo "<script type='text/javascript'>alert('Please enter valid information');
				window.location='signup1.php';
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
	#button a
	{
		text-decoration:none;
		color:white;
	}
	.oi{
		display:flex;
	}
	.oi div{
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
			
			<div style="font-size: 20px;margin: 10px;color: white; text-align:center;">Signup</div>
			<br>
			<input id="text" type="text" name="user_name" placeholder=" user name" required><br><br>
			<input id="text" type="email" name="email" placeholder=" email" required><br><br>
			<input id="text" type="text" name="gender" placeholder=" gender" required><br><br>
            <input id="text" type="text" name="sp" placeholder=" specialization" required><br><br>
			<input id="text" type="password" name="password" placeholder=" password" required><br><br>
			<div class="oi">
			<div><input id="button" type="submit" value="Signup"><br><br></div>
			<div><button type="button" id="button"><a href="login1.php">Already a user</a></button><div>
			</div>

		</form>
	</div>
</body>
</html>



