<?php
    $db=mysqli_connect('localhost','root','','cricket_assoc') or die("Error 404 not found");

     $id=$_REQUEST['username'];
     $new_name = $_POST['username'];
    //  echo $id;
    $del="UPDATE a_login SET username = '$new_name' WHERE username = '$id'";
    if(mysqli_query($db,$del))
    {
        // echo "Done";
        header("location:../update_prof.php");             
    }
    else {
        echo "error ". mysqli_error($db);
    } 
 	// header("location:brand.php");
?>