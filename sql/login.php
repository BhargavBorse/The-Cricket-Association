<?php
    session_start();

    $con=mysqli_connect("localhost","root","", "cricket_assoc");
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $status = 'active';

        $q1 = "SELECT * FROM req_details WHERE username = '$username' and password = '$password' and status='$status'";
        $r1 = mysqli_query($con, $q1);
        if(mysqli_num_rows($r1) > 0)
        {
            $_SESSION['username'] = $username;
            header("location: ../p_index.php");
        }
        else
        {
            echo"<script> alert('Invalid Credentials or request is not accepted yet! Please try again.') </script>";
            echo "<a href='../p_login.php'> <h2>CLICK TO GO BACK </h2></a>";
            // $nex = "Invalid Credentials!";
            // header("location: login.php?msg=$nex");
        }
    }
?>