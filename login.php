<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropshipping</title>
    <link rel="stylesheet" href="/DROPSHIPPING-WEB-2.0/Styles/style-login.css">
    <link rel="stylesheet" href="/DROPSHIPPING-WEB-2.0/Styles/menu-layout.css">
    <link rel="shortcut icon" href="/DROPSHIPPING-WEB-2.0/images/Logo.png" type="image/x-icon"> 
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

                <li class="account-dropdown">
                    <div class="icon">
                        <a href="/DROPSHIPPING-WEB-2.0/php/login.php" class="icon-login">

                            <img src="/DROPSHIPPING-WEB-2.0/images/no_account.png" alt="">
                            <!-- 
                            <img src="/DROPSHIPPING-WEB-2.0/images/account.png" alt=""> 
                        -->
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
    


    <main class="login-main">
        <div class="container-form">
            <h2>Login</h2>
            <form action="verifier-login.php" method="post" >
            <input type="text" name="name" id="name" placeholder="Nombre" required>
                <input type="text" name="nickname" id="nickname" placeholder="Nick Name" required>
                <input type="number" name="ntelephone" id="ntelephone" placeholder="Telephone" required>
                <input type="email" placeholder="Gmail" name="email" id="Email" required>
                <input type="password" name="password" id="contraseña" placeholder="Contraseña" required>
                <button name="btn-login">Login</button>

                <a href="#">Lost your password</a><br>
                <a href="/DROPSHIPPING-WEB-2.0/php/register.php">Don`t have an account?</a>
            </form>
        </div>
    </main>

</body>
</html>