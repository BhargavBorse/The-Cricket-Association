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
                    <a class="nav-link active">Player's Request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sort_player.php">Sort Players</a>
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
                <div class="table-responsive table-hover">
                    <table class="table">
                        <tr>
                            <th>Player Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Game</th>
                            <th>Role</th>
                            <th>DOB</th>
                            <th>Year</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            $db=mysqli_connect('localhost','root','','cricket_assoc') or die("Error 404 not found");

                            $fetch = "SELECT * FROM req_details WHERE status='inactive'";
                    
                            $m = mysqli_query($db, $fetch);

                            while($d = mysqli_fetch_array($m))
                            {
                       
                        ?>
                        <tr>
                            <td>
                                <?php echo $d['player_name'] ?>
                            </td>
                            <td>
                                <?php echo $d['gender'] ?>
                            </td>
                            <td>
                                <?php echo $d['email'] ?>
                            </td>
                            <td>
                                <?php echo $d['contact'] ?>
                            </td>
                            <td>
                                <?php echo $d['game'] ?>
                            </td>
                            <td>
                                <?php echo $d['role'] ?>
                            </td>
                            <td>
                                <?php echo $d['dob'] ?>
                            </td>
                            <td>
                                <?php echo $d['year'] ?>
                            </td>
                            <td>
                                <a class="del-link" href="sql/index.php?accept=<?php echo $d['player_id']; ?>">Accept</a> | 
                                <a class="del-link" href="sql/index.php?decline=<?php echo $d['player_id']; ?>">Decline</a>
                            </td>
                            <?php
                                }
                            ?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>