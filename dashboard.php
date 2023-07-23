<?php
session_start();
if(isset($_SESSION['LAST_ACTIVE_TIME']))
{
if(time()-$_SESSION['LAST_ACTIVE_TIME']>10)
{
    header('Location:logout.php');
}
echo "<body style=background-color:#ADD8E6;>";
echo "<div style=margin-top:100;><center>you are successfully logged in.click the below any one option</center></div>";
echo "<br><center style=margin-top:100;><a href='bookingform.html'><button>Booking</button></a></center>";
echo "<br><center><a href='logout.php'><button>logout</button></a></center></body>";
}
?>

