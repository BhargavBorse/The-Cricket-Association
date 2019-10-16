<?php
    $db=mysqli_connect('localhost','root','','cricket_assoc') or die("Error 404 not found");

     $id=$_REQUEST['accept'];
    //  echo $id;
    $del="UPDATE req_details SET status = 'active' WHERE player_id = $id";
    if(mysqli_query($db,$del))
    {
        // echo "Done";
        header("location:../index1.php");             
    }
    else {
        echo "error ". mysqli_error($db);
    } 
 	// header("location:brand.php");
?>

<?php
    $db=mysqli_connect('localhost','root','','cricket_assoc') or die("Error 404 not found");

     $id=$_REQUEST['decline'];
    //  echo $id;
    $del="UPDATE req_details SET status = 'disabled' WHERE player_id = $id";
    if(mysqli_query($db,$del))
    {
        // echo "Done";
        header("location:../index1.php");             
    }
    else {
        echo "error ". mysqli_error($db);
    } 
 	// header("location:brand.php");
?>