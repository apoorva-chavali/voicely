<?php
session_start();

include("connection.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $field1 = $_POST['field1'];
    $field2=$_POST['field2'];
    $tel_no_1=$_POST['tel_no_1'];
    $tel_no_2=$_POST['tel_no_2'];
    $gender=$_POST['gender'];
    $field5=$_POST['field5'];
    $field6= $_POST['field6'];
    $field7= $_POST['field7'];
    $field8= $_POST['field8'];
    $field9= $_POST['preference'];

    if(!empty($field1) && !empty($field2)  && !empty($tel_no_1) && !empty($field5) && !empty($field6))
    {

        $query = "insert into form (field1,field2,tel_no_1,tel_no_2,gender,field5,field6,field7,field8,preference) values ('$field1','$field2','$tel_no_1','$tel_no_2','$gender','$field5','$field6','$field7','$field8','$field9')";

        mysqli_query($con, $query);

        echo "data added successfully";
        header("Location: homep.php");
        die;
    }else
    {
        echo "Please enter some valid information!";
    }
}
?>
