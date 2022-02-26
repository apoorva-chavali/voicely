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
    <title>doctor home</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
        :root
        {
            --green:#16a085;
            --black:#444;
            --light-color:#777;   /*nav bar color */
            --box-shadow:.5rem .5rem 0 rgba(22, 160, 133, .2);
            --text-shadow:.4rem .4rem 0 rgba(0, 0, 0, .2);
            --border:.2rem solid var(--green);
            font-size: 62.5%;
        }

        *{
            font-family: 'Poppins', sans-serif;
            margin:0; padding: 0;
            box-sizing: border-box;
            outline: none; border: none;
            text-transform: capitalize;
            transition: all .2s ease-out;
            text-decoration: none;
        }
        html
        {
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-padding-top: 7rem;
            scroll-behavior: smooth;
        }
        section
        {
            padding:2% 9%;
        }


        section:nth-child(even)
        {
            background: #f5f5f5;  /* that pic box (stay safe.....)*/

            
        }
        .btn
        {
            display: inline-block;
            margin-top: 1rem;
            padding: .5rem;
            padding-left: 1rem;
            border:var(--border);
            border-radius: .5rem;
            box-shadow: var(--box-shadow);
            color:var(--green);
            cursor: pointer;
            font-size: 1.7rem;
            background: #fff;
        }
        .header{
            padding:2rem 9%;
            position: fixed;
            top:0; left: 0; right: 0;
            z-index: 1000;
            box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #fff;
        }

        .header .logo{
            font-size: 2.5rem;
            color: black;
        }

        .header .logo i{
            color: var(--green);
        }

        .header .navbar a{
            font-size: 1.7rem;
            color: black;
            margin-left: 2rem;
        }
        .header .navbar h2
        {
            text-transform: lowercase;
            font-size: 1.7rem;
            color: var(--light-color);
            margin-left: 2rem;
        }
        .header .navbar a:hover{
            color: var(--green);
        }

        #menu-btn{
            font-size: 2.5rem;
            border-radius: .5rem;
            background: #eee;
            color:var(--green);
            padding: 1rem 1.5rem;
            cursor: pointer;
            display: none;
        }

        .btn span  /* arror mark*/
        {
            padding:7px 7px;
            border-radius: .5rem;
            background: var(--green);
            color:#fff;
            margin-left: 10px;    
        }

        .btn:hover{
            background: var(--green);
            color:#fff;
        }

        .btn:hover span{
            color: var(--green);
            background:#fff;
            margin-left: 1rem;
        }


        .home{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap:10rem;
            padding-top: 10rem;
        }

        .home .image{
            flex:1 1 45rem;
        }

        .home .image img{
            width: 100%;
        }

        .home .content
        {
            flex:1 1 45rem;
        }

        .home .content h3{
            font-size: 4.5rem;
            color:var(--black);
            line-height: 1.8;
            text-shadow: var(--text-shadow);
        }

        .home .content p{
            font-size: 1.7rem;
            color:var(--light-color);
            line-height: 1.8;
            padding: 1rem 0;
        }

        .about .row{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap:2rem;
        }

        .about .row .image{
            flex:1 1 45rem;
        }

        .about .row .image img{
            width: 100%;
        }

        .about .row .content{
            flex:1 1 45rem;
        }

        .about .row .content h3{
            color: var(--black);
            text-shadow: var(--text-shadow);
            font-size: 4rem;
            line-height: 1.8;
        }

        .about .row .content p{
            color: var(--light-color);
            padding:1rem 0;
            font-size: 1.5rem;
            line-height: 1.8;
        }

        .footer .box-container{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(22rem, 1fr));
            gap:2rem;
        }

        .footer .box-container .box h3{
            font-size: 2.5rem;
            color:var(--black);
            padding: 1rem 0;
        }

        .footer .box-container .box a{
            display: block;
            font-size: 1.5rem;
            color:var(--light-color);
            padding: 1rem 0;
        }

        .footer .box-container .box a i{
            padding-right: .5rem;
            color:var(--green);
        }

        .footer .box-container .box a:hover i
        {
            padding-right:2rem;
        }

        /* media queries  */
        @media (max-width:991px){

            html{
                font-size: 55%;
            }

            .header{
                padding: 2rem;
            }

            section{
                padding:2rem;
            }

        }

        @media (max-width:768px){

            #menu-btn{
                display: initial;
            }

            .header .navbar{
                position: absolute;
                top:115%; right: 2rem;
                border-radius: .5rem;
                box-shadow: var(--box-shadow);
                width: 30rem;
                border: var(--border);
                background: #fff;
                transform: scale(0);
                opacity: 0;
                transform-origin: top right;
                transition: none;
            }

            .header .navbar.active{
                transform: scale(1);
                opacity: 1;
                transition: .2s ease-out;
            }

            .header .navbar a{
                font-size: 2rem;
                display: block;
                margin:2.5rem;
            }

        }

        @media (max-width:450px){

            html{
                font-size: 50%;
            }

        }
        </style>
    </head>
    <body>
    <body>
    
    <!-- header section starts  -->
    
        <header class="header">
    
            <a href="#" class="logo"> <i class="fa fa-microphone"></i><b>VoiceLy </b></a>
            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="pat.php">View Patients</a>
                <a href="dprofile.php">Profile</a>
                <a href="logout1.php">Logout</a><br><br>
            
            </nav>
            <div id="menu-btn" class="fas fa-bars"></div>
        </header>
        <!-- home-->
        <section class="home" id="home">
            <div class="image">
                <img src="doctor.png">
            </div>
            <div class="content">
            <h3>we take care of your healthy life</h3>
            <p style = "text-transform:capitalize;"><b> Hello, <?php echo $user_data['user_name'];?></b></p>
            <p>View patients and prescribe medication</p>
            
        </div>
        </section>
        <!-- footer-->
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
    <script src="src.js"></script>

</body>
</html>


