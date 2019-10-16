<?php
    session_start();

    $con=mysqli_connect("localhost","root","", "cricket_assoc");
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];

        $q1 = "SELECT * FROM req_details WHERE username = '$username' and email = '$email'";
        $r1 = mysqli_query($con, $q1);
        if(mysqli_num_rows($r1) > 0)
        {
            $_SESSION['username'] = $username;
            header("location: ../f_p_form.php");
        }
        else
        {
            echo"<script> alert('Wrong Credentials or request is not accepted yet! Please try again.') </script>";
            echo "<a href='../forgot_pswd.php'> <h2>CLICK TO GO BACK </h2></a>";
            // $nex = "Invalid Credentials!";
            // header("location: login.php?msg=$nex");
        }
    }
?>