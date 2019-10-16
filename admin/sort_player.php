<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index - TCA</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    
    <!--Custom CSS-->
    <link type="text/css" rel="stylesheet" href="custom.css" />
    
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
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
                    <a class="nav-link active">Sort Players</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="update_prof.php">Update Profile</a>
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Select Players</h5>
                        <form action="sql/sort_player.php" method="POST">
                        <select name="player" class="form-control something" style="width: 20%;" id="player">
                            <option value="">------SELECT ONE------</option>
                            <?php
                                    $db=mysqli_connect('localhost','root','','cricket_assoc') or die("Error 404 not found");

                                    $sd = $_SESSION['username'];
                                    // echo $sd;
                                    $fetch = "SELECT * FROM player_bat_det";
                    
                                    $m = mysqli_query($db, $fetch);

                                    while($d = mysqli_fetch_array($m))
                                    {
                                        echo "<option value='". $d['player_name'] ."'>" .$d['player_name'] ."</option>" ;
                                    }
                            ?>
                        </select>
                        </form>
                        <!-- <p class="card-text"><small class="text-muted">- Team TID</small></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-deck mb-3">
                    <div class="card border-info">
                        <div class="card-body table-responsive table-hover">
                            <table class="table">
                                <tr>
                                    <th>Level</th>
                                    <th>Run's Scored</th>
                                    <th>Date of Tournament</th>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>