<?php

    include  'login.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main">

<section class="signup">
    <!-- <img src="images/signup-bg.jpg" alt=""> -->
    <div class="container">
        <div class="signup-content">
            <form method="POST" id="signup-form" class="signup-form">
                <h2 class="form-title">Uloguj se</h2>
              
                <div class="form-group">
                    <input type="email" class="form-input" name="emailL" id="emailL" placeholder="Your Email"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" name="passwordL" id="passwordL" placeholder="Password"/>
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </div>
                 
                <div class="form-group">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                </div>
                <div class="form-group">
                    <input type="submit" name="login" id="login" class="form-submit" value="Uloguj se"/>
                </div>
                
            </form>
            <p class="loginhere">
               Nemas nalog ? <a href="register.php" class="loginhere-link">Registruj se</a>
            </p>
        </div>
    </div>
</section>
</body>
</html>