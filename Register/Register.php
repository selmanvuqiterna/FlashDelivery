<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register.css">
    <script defer src="register.js"></script>
    <title>Register Page</title>
</head>
<body>
    <nav class="nav-bar">
        <a id="logoLink" href="../HomePage/home.php"><h1 id="titleLogo">FlashDelivery</h1></a>
        <div>
        <ul id="nav-elements" >
            <a  class="nav-li" href="../Login/Login.php"><img class="logo-link" src="user.png" alt="shop"></a>
        </ul>
        <ul id="navElements">
            <a  class="navli" href="../HomePage/home.php">Home</a>
        </ul>
    </div>
    </nav>
    <div id="body-part">
        <h1 id="body-title">Register</h1>
         
        <div id="form-input">
        <?php
            include 'registration.php';
            $register = new registrationDb();
            $enter = $register->enter();

              ?>
            <form id="formular" action="" method="POST" onsubmit="return validateForm()" name="myForm">
                <input class="inputs" placeholder="Full Name" type="text" id="fullname" name="fullname"> <br>
                <input class="inputs" placeholder="Username" type="text" id="username" name="username">
                <input class="inputs" placeholder="Email" type="text" id="email" name="email"> <br>
                <input class="inputs" placeholder="Phone Number" type="number" id="phone" name="phone">
                <input class="inputs" placeholder="Password" type="text" id="password" name="password"> <br>
                <input class="inputs" placeholder="Comfirm your password" type="text" id="confirmPassword" name="confirmPassword">
                <input  id="register-button" type="submit" name="submit" value="Register"  ></input>
                <a href="../Login/Login.html" id="forgot-pass" >Already have an account? Login</a>
                
            </form>
            
            
        </div>
    </div>
</body>
</html>