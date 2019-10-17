<?php
    session_start();
    $db=mysqli_connect('localhost','root','','cricket_assoc') or die("Error 404 not found");

     $id=$_SESSION['username'];
     $email = $_POST['email'];
     $pno = $_POST['pno'];
    //  echo $id;
    $del="UPDATE a_login SET email = '$email', phone_number = '$pno' WHERE username = '$id'";
    if(mysqli_query($db,$del))
    {
        // echo "<script> alert('ef'); </script>";
        header("location:../update_prof.php");             
    }
    else {
        echo "error ". mysqli_error($db);
    } 
 	// header("location:brand.php");
?>