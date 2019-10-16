<?php

$db=mysqli_connect('localhost','root','','cricket_assoc') or die("Error 404 not found");

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $player_name=$_POST['name'];
    $level=$_POST['level'];
    $date=$_POST['date'];
    $wickets=$_POST['wickets'];

    $k = "INSERT INTO player_bowl_det (player_name, level, date, wickets) VALUES ('$player_name','$level','$date','$wickets')";
    
    if(mysqli_query($db,$k))
    {
        // echo "Done";
        header("location:../view_bowl.php");            
    }
    else {
        echo "error ". mysqli_error($db);
    }
}

?>