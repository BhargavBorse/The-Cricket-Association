<?php
    session_start(); //to ensure you are using same session
    session_destroy(); //destroy the session
    // echo "<script> alert('Logged Out'); </script>";
    header("location:../p_login.php"); //to redirect back to "index.php" after logging out
    exit();
?>