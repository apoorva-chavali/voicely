<?php
include("connection.php");
//pateint will tell his problem in the form

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient profile</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styleprofile.css">
    <style>
        body
        {
            overflow-x: scroll;
        }
        .abc
        {
            position: relative;
            margin-top:10rem;
			margin-left:43rem;
			width: 50%;
			border: 3px solid #000000;
			padding: 10px;
        }
        .form-style-2
        {
            max-width: 500px;
            padding: 20px 12px 10px 20px;
            font: 13px Arial, Helvetica, sans-serif;
        }
        .form-style-2-heading
        {
            font-weight: bold;
            font-style: italic;
            border-bottom: 2px solid #ddd;
            margin-bottom: 20px;
            font-size: 15px;
            padding-bottom: 3px;
        }
        .form-style-2 label
        {
            display: block;
            margin: 0px 0px 15px 0px;
        }
        .form-style-2 label > span
        {
            width: 100px;
            font-weight: bold;
            float: left;
            padding-top: 8px;
            padding-right: 5px;
        }
        .form-style-2 span.required
        {
            color:red;
        }
        .form-style-2 .tel-number-field
        {
            width: 40px;
            text-align: center;
        }
        .form-style-2 input.input-field, .form-style-2 .select-field{
            width: 48%;	
        }
        .form-style-2 input.input-field, 
        .form-style-2 .tel-number-field, 
        .form-style-2 .textarea-field, 
        .form-style-2 .select-field
        {
            box-sizing: border-box;
            border: 1px solid #C2C2C2;
            box-shadow: 1px 1px 4px #EBEBEB;
            border-radius: 3px;
            padding: 7px;
            outline: none;
        }
        .form-style-2 .textarea-field{
            height:100px;
            width: 55%;
        }
        .form-style-2 input[type=submit],
        .form-style-2 input[type=button]{
            border: none;
            padding: 8px 15px 8px 15px;
            background: #FF8500;
            color: #fff;
            box-shadow: 1px 1px 4px #DADADA;
            border-radius: 3px;
        }
        .form-style-2 input[type=submit]:hover,
        .form-style-2 input[type=button]:hover{
            background: #EA7B00;
            color: #fff;
            
        }

        </style>
    </head>
    <body>
    
    <!-- header section starts  -->
    
        <header class="header">
    
            <a href="#" class="logo"> <i class="fa fa-microphone"></i><b>VoiceLy </b></a>
            <nav class="navbar">
                <a href="homep.php">Home</a>
                <a href="doc.php">View Doctors</a>
                <a href="pprofile.php">Profile</a>
                <a href="logout.php">Logout</a><br><br>
            
            </nav>
            <div id="menu-btn" class="fas fa-bars"></div>
        </header>
        <div class="abc">
            <div class="form-style-2">
            <form action="process.php" method="post">
                <div class="form-style-2-heading">Provide your information</div>
                    <form action="process.php" method="post">
                    <label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="field1" value="" /></label>
                    <label for="field2"><span>Email <span class="required">*</span></span><input type="text" class="input-field" name="field2" value="" style="text-transform:none;" /></label>
                    <label for="tel_no_1"><span>Age <span class="required">*</span></span><input type="text" class="input-field" name="tel_no_1" value="" /></label>
                    <label for="tel_no_2"><span>User id <span class="required">*</span></span><input type="text" class="input-field" name="tel_no_2" value="" placeholder="Check Patient Profile"/></label>
                    <label for="gender"><span>Gender <span class="required">*</span></span><input type="text" class="input-field" name="gender" value="" /></label>
                    <label for="field5"><span>List your present medication<span class="required">*</span></span><textarea name="field5" placeholder="type -- if none" class="textarea-field"></textarea></label>

                    <label for="field6"><span>Allergies<span class="required">*</span></span><textarea name="field6" class="textarea-field"></textarea></label>
                    <label for="field7"><span>State your medical condition <span class="required">*</span></span><textarea name="field7" class="textarea-field"></textarea></label>
                    <label for="field8"><span>Past medical history<span class="required">*</span></span><textarea name="field8" class="textarea-field"></textarea></label>
                    <label for="preference"><span>Enter the specialization of the Doctor you want to consult(if any)<span></span></span><input type="text" class="input-field" name="preference" value="" style="text-transform:none;"/></label>
                    <label><input type="submit" value="Submit" /></label>
                </form>
            </div>
        </div>
        <script src="src.js"></script>
    </body>
</html>
