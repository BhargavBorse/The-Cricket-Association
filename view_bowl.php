<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bowl Detail - TCA</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    
    <!--Custom CSS-->
    <link type="text/css" rel="stylesheet" href="custom.css" />
    
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png" />

    <script>
        function printDiv(printableArea) {
         var printContents = document.getElementById('printableArea').innerHTML;
         var originalContents = document.body.innerHTML;
            
         document.body.innerHTML = printContents;
            
         window.print();
            
         document.body.innerHTML = originalContents;
    }
    </script>
    
    <style>
        body{
            background-image: url(adam.jpg);
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
                    <a class="nav-link" href="insert_bat_det.php">Enter Run Stats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="insert_bowl_det.php">Enter Bowling Stats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_run.php">View Run Stats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active">View Bowling Stats</a>
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
                    <h1 style="color: white;">Wicket's taken in Past Tournaments</h1>
                </div>
                <span  style="background-color: rgba(34, 31, 32, 0.87); color: white;">
                    
                </span>
            </div>
            <div class="col-lg-2"></div>
        </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <input type="button" class="btn btn-danger my-2 my-sm-0" style="width: 20%;" onclick="printDiv('printableArea')" value="Print / Generate PDF" />
                <div class="card-deck mb-3">
                    <div class="card border-info">
                        <div class="card-body table-responsive table-hover" id="printableArea">
                            <table class="table">
                                <tr>
                                    <th>Level</th>
                                    <th>Wicket's Taken</th>
                                    <th>Date of Tournament</th>
                                </tr>
                                <?php
                                    $db=mysqli_connect('localhost','root','','cricket_assoc') or die("Error 404 not found");

                                    $sd = $_SESSION['username'];
                                    // echo $sd;
                                    $fetch = "SELECT * FROM player_bowl_det WHERE player_name = '$sd'";
                    
                                    $m = mysqli_query($db, $fetch);

                                    while($d = mysqli_fetch_array($m))
                                    {
                       
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $d['level']." Level" ?>
                                    </td>
                                    <td>
                                        <?php echo $d['wickets'] ?>
                                    </td>
                                    <td>
                                        <?php echo $d['date'] ?>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>