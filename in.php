<?php

if(isset ($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database_name= "trip";

    $con= mysqli_connect($server , $username , $password);


    if (!$con){
        die ("Connecyion to this database falied fue to error" . mysqli_connect());
    }
    echo "Successfull Connection to the Database";


    mysqli_select_db($con, 'trip');

$name=$_POST['name'];
$age=$_POST ['age'];
$email=$_POST ['email'];
$phone=$_POST ['phone'];
$gender=$_POST ['gender'];
$other=$_POST ['other'];

$sql= "INSERT INTO `trip` ( `name`, `age`, `email`, `phone`, `gender`, `other`, `date`) VALUES ( '$name', '$age', '$email', '$phone', '$gender', '$other', current_timestamp())";



if ($con-> query($sql)== true)
{
    echo "Succesfully Inserted";
}
else {
    echo "Error : $sql <br> $con->error";
}

$con->close();
}



?>