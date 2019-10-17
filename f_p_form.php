<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#dc3545">
    <!-- manifest file -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    
    <!--CSS for login-->
    <link type="text/css" rel="stylesheet" href="login.css" />
    
    <!--Custom CSS-->
    <link type="text/css" rel="stylesheet" href="custom.css" />
    <title>Login - TCA</title>
    
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png" />

    <style>
        body{
            background-image: url(bg--1.png);
        }
    </style>
</head>

<body>
    
    <div class="d-flex justify-content-center align-items-center" style="height:100%">
        <div>
            <div class="d-flex justify-content-center">
                <h3 class="font-weight-normal">The Cricket Association</h2>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <span class="border" style="background-color: rgba(34, 31, 32, 0.87); color: white;">
                        <form action="sql/f_p_form.php" method="POST" style="padding: 50px;">
                        <p>Credentials Verified</p>
                            <label>Enter new password</label>
                            <!-- <input type="text" name="username" value=""> -->
                            <input type="password" name="new_pswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" id="password" required>
                            <br>
                            <input type="submit" name="submit" value="UPDATE" class="btn btn-block btn-outline-info"> 
                            <!-- <a href="forgot_pswd.php" name="forgot" class="btn btn-block btn-outline-info">FORGOT PASSWORD </a> -->
                            <!-- <a href="fp.php" class="nav-link btn-outline-info">Forgot Password</a> -->
                        </form>
                    </span>
                </div>
            </div>
        </div>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    </body>
    
    </html>