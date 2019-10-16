<?php
    session_start();

    $db=mysqli_connect('localhost','root','','cricket_assoc') or die("Error 404 not found");

    $update_pswd = $_POST['new_pswd'];
    $player_name = $_SESSION['username'];
    
    //  echo $id;
    $del="UPDATE req_details SET password = '$update_pswd' WHERE player_name = '$player_name'";
    if(mysqli_query($db,$del))
    {
        // echo "Done";
        header("location:../p_index.php");             
    }
    else {
        echo "error ". mysqli_error($db);
    } 
 	// header("location:brand.php");
?>