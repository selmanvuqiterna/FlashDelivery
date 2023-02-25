<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <script defer src="login.js"></script>
    <title>Login Page</title>
</head>
<body>
    <nav class="nav-bar">
        <a id="logoLink" href="../HomePage/home.php"><h1 id="titleLogo">FlashDelivery</h1></a>
        <div>
        <ul id="nav-elements" >
            <a  class="nav-li" href="../HomePage/home.php"><img class="logo-link" src="home.png" alt="shop"></a>
        </ul>
        <ul id="navElements">
            <a  class="navli" href="../HomePage/home.php">Home</a>
        </ul>
    </div>
    </nav>
    <div id="body-part">
        <h1 id="body-title">Log In</h1>

        <?php
                include '../Register/registration.php';
                $login = new registrationDb();
                $reCheck = $login->reCheck();
            ?>
        <div id="form-input">
            <form id="form" action="" method="POST" name="myForm" >
                <input class="inputs" id="username" placeholder="Enter your Username" type="text" name="username" required > <br>
                <input class="inputs" id="password" placeholder="Enter your password" type="password" name="password">
                <input id="submit-button" type="submit"  name="submit" value="Login"></input>
            </form>
            <a href="#" id="forgot-pass">Forgot Password ?</a>
            <a href="../Register/Register.php"> <button id="register-button" type="submit" value="submit">Register</button> </a>
        </div>
    </div>


    
</body>
</html>