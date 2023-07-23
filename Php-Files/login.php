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
$user=$_POST['username'];
$pass=$_POST['pass'];
$result=mysqli_query($conn,"select * from signup_user where username='$user' and password='$pass'");
$res2=mysqli_num_rows($result);
while($rows=mysqli_fetch_array($result))
{
if(($res2>0)&&($rows[0]=="admin"))
{
 $_SESSION['IS_LOGIN']='yes';
 $_SESSION['LAST_ACTIVE_TIME']=time();
 header('Location:adminlist.php');
 die();
}
elseif(($res2>0)&&($rows[0]!="admin"))
{
    $_SESSION['IS_LOGIN']='yes';
 $_SESSION['LAST_ACTIVE_TIME']=time();
 header('Location:dashboard.php');
 die();
}
else{
    echo "enter correct credentials";
}
}
}
else{
    die(mysqli_error($conn));
}
}