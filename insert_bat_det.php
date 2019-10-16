<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Runs Details - TCA</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    
    <!--Custom CSS-->
    <link type="text/css" rel="stylesheet" href="custom.css" />
    
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png" />

    <style>
        body{
            background-image: url(aksh-yad.jpg);
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
        <a class="navbar-brand" href="p_index.php">The Cricket Association <span class="sr-only">(current)</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" style="margin-left: 5%;" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active">Enter Run Stats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="insert_bowl_det.php">Enter Bowling Stats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_run.php">View Run Stats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_bowl.php">View Bowling Stats</a>
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
            <div class="col-lg-8">
                <div class="d-flex justify-content-center">
                    <h1 style="color: white;">Runs Statistics</h1>
                </div>
                <span style="background-color: rgba(34, 31, 32, 0.87); color: white;">
                    <form action="sql/insert_bat.php" method="POST" style="padding: 50px; background-color: rgba(34, 31, 32, 0.87); color: white;">
                        <h3>Enter Details Here.</h3>
                        <p>And improve your profile</p>
                        <hr class="border-bottom">
                        <label>Player Name</label>
                        <input type="text" name="name" class="form-control" id="username" required>
                        <br>
                        <label>Level</label>
                        <select name="level" id="level" class="form-control" required>
                            <option class="form-control" value="">---Select---</option>
                            <option value="State" class="form-control">State</option>
                            <option value="National" class="form-control">National</option>
                            <option value="Inter-National" class="form-control">Inter-National</option>
                        </select>
                        <br>
                        <label>Date of tournament</label>
                        <input type="date" name="date" class="form-control" required>
                        <br>
                        <label>Runs Scored</label>
                        <input type="number" name="runs" class="form-control" required>
                        <br>
                        <input type="submit" value="SAVE" class="btn btn-block btn-outline-info">  
                        <!-- <a href="fp.php" class="nav-link btn-outline-info">Forgot Password</a> -->
                    </form>
                </span>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</body>
</html>