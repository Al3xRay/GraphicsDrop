<?php

require 'connection.php';


if (!empty(["btn-login"])) 
{
    if (empty($_POST["nickname"]) and empty($_POST["password"])) 
    {
        echo "<script> alert('El Formulario Esta Vacio') </script>";
    } 
    else 
    {   
        $name = $_POST['name'];
        $nickname = $_POST['nickname'];
        $ntelephone = $_POST['ntelephone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = $connection->query("select * from user_date where name = '$name' and nickname = '$nickname'
        and ntelephone = '$ntelephone' and email = '$email' and password = '$password'");
        
        
        if ($sql->fetch_object())
        {  
            session_start();
            $_SESSION['sesion_started'] = true;
            $_SESSION['name'] = $name;
            $_SESSION['nickname'] = $nickname;
            $_SESSION['ntelephone'] = $ntelephone;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header("location:/DROPSHIPPING-WEB-2.0/php/profile.php");
        }
        else
        {
            echo ' <script> alert("No se ha encontrado el usuario. Por favor registrate") </script>';
        }
    }
}




?>