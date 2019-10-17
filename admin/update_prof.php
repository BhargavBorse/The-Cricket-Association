<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password - TCA</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    
    <!--Custom CSS-->
    <link type="text/css" rel="stylesheet" href="custom.css" />
    
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png" />

    <style>
        body{
            background-image: url(sart.jpg);
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            height: 577px;
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top" id="thenav" >
        <a class="navbar-brand" href="index1.php">The Cricket Association <span class="sr-only">(current)</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" style="margin-left: 25%;" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index1.php">Player's Request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sort_player.php">Sort Players</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active">Update Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cpassword.php">Change Password</a>
                </li>
            </ul>
            <?php
            if(isset($_SESSION['username'])){
                ?>
            <span class="navbar-text mr-1" id="userName">                             
                Welcome, <?php echo $_SESSION['username']; ?>
            </span>  
                <?php
            }
            ?>           
            <a href="sql/logout.php" class="btn btn-outline-light my-2 my-sm-0" >Sign Out</a>
        </div>
    </nav>
    <br><br>
    <div class="container">
        <div class="row">
        <div class="col-lg-2"></div>
            <div class="col-lg-12">
                <div class="d-flex justify-content-center">
                    <!-- <h1 style="color: white">Bowling Statistics</h1> -->
                </div>
                <span style="background-color: rgba(34, 31, 32, 0.87); color: white;">
                    <form action="sql/update_prof.php" method="POST" style="padding: 50px; background-color: rgba(34, 31, 32, 0.87); color: white;">
                        <h3>Update Profile</h3>
                        <?php
                            $db=mysqli_connect('localhost','root','','cricket_assoc') or die("Error 404 not found");

                            $fetch = "SELECT * FROM a_login";
                    
                            $m = mysqli_query($db, $fetch);

                            while($d = mysqli_fetch_array($m))
                            {
                       
                        ?>
                        <!-- <p>And improve your profile</p> -->
                        <hr class="border-bottom">
                        <label>User Name: </label>
                            <input type="text" name="name" class="form-control" id="name" value="<?php echo $d['username'] ?>" disabled>
                        <br>
                        <label>Phone Number</label>
                            <input type="number" name="pno" id="pno" class="form-control" value="<?php echo $d['phone_number']?>">
                        <br>
                        <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo $d['email']?>">
                        <br>
                        <input type="submit" value="UPDATE" class="btn btn-outline-danger">  
                        <!-- <a href="fp.php" class="nav-link btn-outline-info">Forgot Password</a> -->
                    </form>
                            <?php } ?>
                </span>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</body>
</html>