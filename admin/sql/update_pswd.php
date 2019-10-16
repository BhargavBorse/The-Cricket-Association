<?php
    session_start();

    $db=mysqli_connect('localhost','root','','cricket_assoc') or die("Error 404 not found");

    $update_pswd = $_POST['new_pswd'];
    // $p_name = $_SESSION['username'];
    
    //  echo $id;
    // UPDATE `a_login` SET `password`="bhargav" WHERE username = "bb";
    $del="UPDATE a_login SET password = '$update_pswd' WHERE username = 'bb'";
    if(mysqli_query($db,$del))
    {
        // echo "Done";
        echo "<script> alert('Password Changed') </script>";
        header("location:../index1.php");          
    }
    else {
        echo "<script> alert('Error') </script>";
        // echo "error ". mysqli_error($db);
    } 
 	// header("location:brand.php");
?>