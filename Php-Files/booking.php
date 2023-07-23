<?php
if(isset($_POST['submit']))
{
    session_start();
    if(isset($_SESSION['LAST_ACTIVE_TIME']))
    {
    if(time()-$_SESSION['LAST_ACTIVE_TIME']>10)
    {
        header('Location:logout.php');
    }
}
    $servername = 'localhost:4306';
    $username = 'root';
    $password ='';
    $db = 'signup';
    $conn = mysqli_connect($servername, $username, $password);
    if($conn)
{
    mysqli_select_db($conn,$db);
    $select = $_POST['package'];
$journey=$_POST['journey'];
$members=$_POST['members'];
$date=$_POST['date'];
$sql = "insert into booking(package,trav_mod,members,start_date) values ('$select','$journey','$members','$date')";
mysqli_query ($conn,$sql);
header('Location:payment.php');
}
}
?>
