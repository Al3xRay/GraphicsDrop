<?php

require 'connection.php';


$name = $_POST['name'];
$nickname = $_POST['nickname'];
$ntelephone = $_POST['ntelephone'];
$email = $_POST['email'];
$password = $_POST['password'];


$insert = "INSERT INTO user_date VALUES ('$name','$nickname','$ntelephone','$email','$password')";

$query = mysqli_query($connection, $insert);

if ($query)
{
    echo'<script> alert("Se han insertado los datos correctamente")</script>';
    header("location:/DROPSHIPPING-WEB-2.0/php/login.php");
}
/*
else{
    echo '<script> alert("No se han insertado los datos correctamente") </script>';
}

*/