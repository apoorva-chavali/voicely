<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient profile</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style1.css">
    <style>
        body
        {
            overflow-x: scroll;
        }
        .doctable {
        font-size: 15px;
        margin-top:15rem;
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        .doctable td, .doctable th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        .doctable tr:nth-child(even){background-color: #f2f2f2;}

        .doctable tr:hover {background-color: #ddd;}

        .doctable th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
        }
        </style>
    </head>
    <body>
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
        <?php
        include_once 'connection.php';
        $result = mysqli_query($con,"SELECT * FROM form");
        ?>
        <?php
        if (mysqli_num_rows($result) > 0) {
        ?>
        <table border = "1" cellpadding="10" bordercolor="black" class='doctable'>
        <tr>
            <th>User id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Prefered Doctor Specialization</th>
            <th>Present Medication</th>
            <th>Allergies</th>
            <th>Medical Condition</th>
            <th>Uploaded on</th>
            <th>Prescribe</th>
        </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
        <td><?php echo $row["tel_no_2"]; ?></td>
        <td><?php echo $row["field1"]; ?></td>
        <td style = "text-transform:none;"><?php echo $row["field2"];?></td>
        <td><?php echo $row["tel_no_1"]; ?></td>
        <td><?php echo $row["gender"]; ?></td>
        <td><?php echo $row["preference"]; ?></td>
        <td><?php echo $row["field5"]; ?></td>
        <td><?php echo $row["field6"]; ?></td>
        <td><?php echo $row["field7"]; ?></td>
        <td><?php echo $row["uploaded_on"]; ?></td>
        <td><a href="pre.php" class="button">Prescribe</a></td>
        </tr>
        <?php
        $i++;
        }
        ?>
        </table>
        <?php
        }
        else{
        echo "No result found";
        }
        ?>
    </body>
</html>