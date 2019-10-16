<?php

$db=mysqli_connect('localhost','root','','cricket_assoc') or die("Error 404 not found");

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $player_name=$_POST['name'];
    $level=$_POST['level'];
    $date=$_POST['date'];
    $runs=$_POST['runs'];

    $k = "INSERT INTO player_bat_det (player_name, level, date, run) VALUES ('$player_name','$level','$date','$runs')";
    
    if(mysqli_query($db,$k))
    {
        // echo "Done";
        header("location:../view_run.php");            
    }
    else {
        echo "error ". mysqli_error($db);
    }
}

?>