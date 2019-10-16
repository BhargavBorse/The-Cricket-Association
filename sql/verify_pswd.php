<?php
    session_start();

    $con=mysqli_connect("localhost","root","", "cricket_assoc");
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['current_pswd'];

        $q1 = "SELECT * FROM req_details WHERE username = '$username' and password = '$password'";
        $r1 = mysqli_query($con, $q1);
        if(mysqli_num_rows($r1) > 0)
        {
            $_SESSION['username'] = $username;
            header("location: ../change_pswd.php");
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