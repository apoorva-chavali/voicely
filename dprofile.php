<!-- profile page -->
<?php 
session_start();

	include("connection1.php");
	include("functions1.php");
	$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doctor profile</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style1.css">
    </head>
    <body>
    <body>
    
    <!-- header section starts  -->
    
        <header class="header">
    
            <a href="#" class="logo"> <i class="fa fa-microphone"></i><b>VoiceLy </b></a>
            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="pat.php">View Patients</a>
                <a href="dprofile.php">Profile</a>
                <a href="logout1.php">Logout</a><br><br>
            
            </nav>
            <div id="menu-btn" class="fas fa-bars"></div>
        </header>
        <!-- home-->
        <section class="home" id="home">
            <div class="content">
                <div class="content">
                    <p style = "text-transform:capitalize;"><b>Name: &nbsp; </b><?php echo $user_data["user_name"];?> </p>
                    <p style = "text-transform:none;"><b>Email: &nbsp;</b><?php echo $user_data["email"];?> </p>
                    <p style = "text-transform:capitalize;"><b>Doctor Id: &nbsp;</b><?php echo $user_data["user_id"];?> </p>
                    <p style = "text-transform:capitalize;"><b>Specialization:  &nbsp;</b><?php echo $user_data["sp"];?></p>
                    <p style = "text-transform:capitalize;"><b>Gender:  &nbsp;</b><?php echo $user_data["gender"];?></p>
                </div>
            </div>
        </section>
        <script src="src.js"></script>
        

</body>
</html>


