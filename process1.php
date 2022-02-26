<!-- put data into table and delete the user from forms  -->  

<?php
session_start();

include("connection1.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $name = $_POST['name'];
    $pemail=$_POST['pemail'];
    $tel_no_2=$_POST['tel_no_2'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $medication=$_POST['medication'];
    $symptoms= $_POST['symptoms'];
    $advice= $_POST['advice'];
    $sign= $_POST['sign'];

    $to=$pemail;
    $subject='Prescription';
    $message="Name : ".$name."\n"."Age : ".$age."\n"."Gender : ".$gender."\n"."Medication : ".$medication."\n"."Symptoms : ".$symptoms."\n"."Advice : ".$advice."\n"."Sign : ".$sign;
    $headers="From: voicelypresc@gmail.com";
    $mail_sent=mail($to,$subject,$message,$headers);
    if($mail_sent==true)
    echo "mail sent";
    else
    echo "error";
    
    if(!empty($name) && !empty($medication)  && !empty($symptoms) && !empty($advice) && !empty($age))
    {

        $query = "insert into prescription (name,p_email,tel_no_2,age,gender,medication,symptoms,advice,signature) values ('$name','$pemail','$tel_no_2','$age','$gender','$medication','$symptoms','$advice','$sign')";
        mysqli_query($con, $query);
    }
    else
    {
        echo "Please enter some valid information!";
    }

}
include_once 'connection.php';
mysqli_select_db($con,'login_sample_db');
$sql = "DELETE FROM form WHERE tel_no_2=$tel_no_2";
if (mysqli_query($con, $sql)) 
{
    header("Location: home.php");
    die;
} 
else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>
