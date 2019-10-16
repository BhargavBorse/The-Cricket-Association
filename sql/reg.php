<?php

$db=mysqli_connect('localhost','root','','cricket_assoc') or die("Error 404 not found");

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $player_name=$_POST['name'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $contact=$_POST['phone_no'];
    $game=$_POST['game'];
    $role=$_POST['role'];
    $dob=$_POST['date'];
    $year=$_POST['year'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    if($password == $cpassword)
    {
    $k = "INSERT INTO req_details (player_name, gender, email, contact, game, role, dob, year, username, password, status) VALUES ('$player_name','$gender','$email','$contact','$game','$role','$dob','$year','$username','$password', 'inactive')";
    
    if(mysqli_query($db,$k))
    {
        // echo "Done";
        header("location:../p_success.php");            
    }
    else {
        echo "error ". mysqli_error($db);
    }
}
else{
    echo "Passwords not matched! Go Back and try again <a href='../p_reg.php'>Back</a>" ;
}
}
?>