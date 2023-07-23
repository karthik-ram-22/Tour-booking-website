<?php
session_start();
if(isset($_POST['submit']))	
{
    $servername = 'localhost:4306';
    $username = 'root';
    $password ='';
    $db = 'signup';
    $conn = mysqli_connect($servername, $username, $password);
    if($conn)
{
    mysqli_select_db($conn,$db);
    $user=$_POST['user'];
    $pass=$_POST['p1'];
    $sql="UPDATE signup_user SET password='$pass' WHERE username='$user'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header('Location:login.html');
    }
    else{
echo "user not found";
    }
}
}