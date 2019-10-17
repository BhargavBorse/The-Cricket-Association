<?php
    session_start();

    $con=mysqli_connect("localhost","root","", "cricket_assoc");
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $old_password = $_POST['old_pswd'];
        $new_password = $_POST['new_pswd'];
        $player_name = $_SESSION['username'];

        $q1 = "SELECT * FROM a_login WHERE username = '$username' and password = '$old_password'";
        $r1 = mysqli_query($con, $q1);
        if(mysqli_num_rows($r1) > 0)
        {
            $_SESSION['username'] = $username;
            // header("location: ../change_pswd.php");
            if($old_password != $new_password)
            {
                $del="UPDATE a_login SET password = '$new_password' WHERE username = '$player_name'";
                if(mysqli_query($con,$del))
                {
                    // echo "Done";
                    header("location:../index1.php");             
                }
            }
            else
            {
                // echo "Old password and new password should not be same.";
                echo "<a href='../cpassword.php'><h3>Old password and new password should not be same.</h3></a>";
            }
        }
        else
        {
            echo "<script> alert('Please enter valid Credentials.'); </script>";
            echo "<a href='../cpassword.php'><h3>Click Here To Go Back</h3></a>";
            // $nex = "Invalid Credentials!";
            // header("location: login.php?msg=$nex");
        }
    }
?>