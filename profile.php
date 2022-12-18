<?php

    session_start();

    $sesion_started = $_SESSION['sesion_started'];
    if ($sesion_started == null) {
        header('location:login.php');
        die();
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropshipping</title>
    <link rel="shortcut icon" href="images/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/DROPSHIPPING-WEB-2.0/Styles/menu-layout.css">
    <link rel="stylesheet" href="/DROPSHIPPING-WEB-2.0/Styles/style-profile.css">
</head>
<body>
    <header class="header-menu">
        <nav>
            <ul>
                <!--
                <li class="input">
                    <input type="text" class=".input__search-menu" placeholder="  Search... " >
                </li>    
                -->     
                <li>
                    <div>
                        <a href="/DROPSHIPPING-WEB-2.0/main-products-body.html">PRODUCTS</a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href="#">MY CAR</a>
                    </div>
                </li>
                <li class="lang">
                    <div>
                        <a href="#">ENG</a>
                    </div>
                </li>
                
                <!-- 
                <li class="account-dropdown">
                    <div class="icon">
                        <a href="login.php" class="icon-login">

                            <img src="/DROPSHIPPING-WEB-2.0/images/no_account.png" alt="">
                            <img src="/DROPSHIPPING-WEB-2.0/images/account.png" alt=""> 
                        </a>
                    </div>
                    <ul>
                        <li>
                            <a href="/DROPSHIPPING-WEB-2.0/php/profile.php">My Profile</a>
                        </li>
                        <li class="close-session">
                            <a href="/DROPSHIPPING-WEB-2.0/php/close_session.php">Cerrar Sesion</a>
                        </li>
                    </ul>
                </li>
            -->
            </ul>
        </nav>
        
        <div>
            <a href="/DROPSHIPPING-WEB-2.0/index.html">
                <nav class="img-header">
                    <div class="img">
                        
                    </div>
                </nav>
            </a>
        </div>
    </header>


    
    <main class="main-profile">
        <div class="container-user">
            <div class="container-img">
                <img src="/DROPSHIPPING-WEB-2.0/images/bg.jpeg" alt="">
            </div>
            <div class="container-name_user">
                <h3>@<?php echo $_SESSION['name'] ?></h3>
            </div>
        </div>



        <div class="container-details-account">
            <h3 id="header-text-details">Details Account</h3>
            <h3 id="titles">Nickname</h3><a href="">Edit</a>

            <div>
               <input type="text" value="<?php echo $_SESSION['nickname'] ?> " readonly> 
            </div>

            <h3 id="titles">Number Telephone</h3><a href="">Edit</a>
            <div>
            <input type="text" value="<?php echo $_SESSION['ntelephone'] ?> " readonly>
            </div>

            <h3 id="titles">Email</h3><a href="">Edit</a>
            <div>
            <input type="text" value="<?php echo $_SESSION['email'] ?> " readonly>
            </div>

            <h3 id="titles">Password</h3><a href="">Edit</a>
            <div>
            <input type="password" value="<?php echo $_SESSION['password'] ?> " readonly>
            </div>
            
            <h3 id="about-you">About You</h3><a href="">Edit</a>
            <div class="container-textarea">
                <textarea class="textarea" name="textarea" readonly></textarea>
            </div>
            <div class="container-close-session">
                <a href="/DROPSHIPPING-WEB-2.0/php/close_session.php">Close Session</a>
            </div>
            <div class="container-delete-session">
                <a href="/DROPSHIPPING-WEB-2.0/php/delete-account.php">Detele Account</a>
            </div>

        </div>
    </main>
</body>
</html>