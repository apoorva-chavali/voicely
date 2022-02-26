
<?php 
session_start();

	include("connection1.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voice prescription</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fa fa-microphone"></i> VoiceLy </a>

    <nav class="navbar">
        <a href="#home"><b>Home</b></a>
        <a href="#about"><b>About</b></a>
        <h2>Contact us: voicelypresc@gmail.com</h2>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="intro1.png" alt="">
    </div>

    <div class="content">
        <h3>Stay safe, stay healthy</h3>
        <p>Go paperless with E-Prescription</p>
        <a href="homep.php" class="btn"> Patient login <span class="fas fa-chevron-right"></span> </a>
        <a href="home.php" class="btn"> Doctor login <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">
    <div class="icons">
        <i class="fas fa-user-md"></i>
        <?php

        
        $con = mysqli_connect("localhost:3307","root","","doctordb");

            
            $sql = "SELECT * from users";

            if ($result = mysqli_query($con, $sql)) 
            {

              
                $rowcount = mysqli_num_rows( $result );
                echo "<h3>$rowcount</h3>";
            }

// Close the connection
mysqli_close($con);

?>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <?php

        
        $con = mysqli_connect("localhost:3307","root","","patientdb");

            
            $sql = "SELECT * from users";

            if ($result = mysqli_query($con, $sql)) 
            {

                // Return the number of rows in result set
                $rowcount = mysqli_num_rows( $result );
                echo "<h3>$rowcount</h3>";
            }
            mysqli_close($con);

        ?>
        <p>Patients Registered</p>


    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="aboutus.jpg" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p>This Website Provides A Framework For Prescribing Drugs Using Speech-To-Text Recognition Technology. The Patient Will Receive His Prescription Via Email. This Helps In Handling More People In Less Amount Of Time With More Human Accuracy.</p>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone-alt"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-envelope"></i> vp123@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> voicelypresc@gmail.com </a>
        </div>

    </div>

</section>

<!-- footer section ends -->
<script src="src.js"></script>

</body>
</html>