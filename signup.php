<?php
// Create connection
if(isset($_POST['submit']))
{
    session_start();
    $servername = 'localhost:4306';
    $username = 'root';
    $password ='';
    $db = 'signup';
    $conn = mysqli_connect($servername, $username, $password);
    if($conn)
{
    mysqli_select_db($conn,$db);
    $name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$pass=$_POST['pass'];
$sql = "insert into signup_user(username,email,contact,password) values ('$name','$email','$contact','$pass')";
mysqli_query ($conn,$sql);
header("Location:login.html");
}
else{
    die(mysqli_error($conn));
}
}
?>