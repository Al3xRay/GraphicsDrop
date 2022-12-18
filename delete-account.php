<?php

    require 'connection.php';

    session_start();

    if ($_SESSION['sesion_started'] = true) {
        
        if ($sql != null) {
            $sql = "DELETE FROM user_date";
        }
        else
        {
            echo "no hay nada";
        }

    }

?>