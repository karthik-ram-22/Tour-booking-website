<html>
<head>
<style>
.subm {
      background-color: #5edaf0;
      color: #000;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4);
    }
body{
background-image: url('https://image.shutterstock.com/image-photo/blur-beautiful-nature-green-palm-260nw-763613083.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
font-size: 150%;
color:#000;
}
table, th, td {
border: 1px solid#5edaf0;
color:black;
background-color: #668cff;
font-size: 100%;
}
</style>
</head>
<body>
<?php
    $servername="localhost:4306";
    $username="root";
    $password="";
    $conn=mysqli_connect($servername,$username,$password);
    $ab=mysqli_select_db($conn,"signup");
if(!$ab)
    {
        echo "database not exist";
    }
    else
    {
$sql = "select DISTINCT package,trav_mod,members,start_date from booking;";
$sql2="select username from signup_user where username!='admin'";
$res=mysqli_query($conn,$sql);
$res1=mysqli_query($conn,$sql2);
echo "<center><h3>WELCOME ADMIN</h3></center><br><br>";
echo "<table>"."<th>user who booked</th>"."<th>Package </th>" ."<th>Travel Mode </th>"."<th>No.of Members</th>" ."<th>Starting Date</th>";
while($rows = mysqli_fetch_array($res)){
    while($rows2=mysqli_fetch_array($res1))
    {
echo "<tr><td>".$rows2['username']."</td><td>".$rows['package']."</td><td>".$rows['trav_mod']."</td><td>".$rows['members']."</td><td>".$rows['start_date']."</td></tr>";
break;}
}
echo "</table>";

$sql3 = "SELECT * from booking";
if ($result = mysqli_query($conn, $sql3)) {
  
    $rowcount = mysqli_num_rows( $result );
echo "Number of packages booked: ".$rowcount."<br><br>";
}

$sql4 = "SELECT SUM(members) FROM booking;";
if ($result = mysqli_query($conn, $sql4)) {
  $row = mysqli_fetch_array($result); 
echo 'Number of tickets sold: ' . $row[0]."<br><br>";
echo 'Total Revenue: Rs.' .($row[0]*15000)."<br><br>";
echo 'Cost of investment: Rs.'.($row[0]*13000)."<br><br>";
echo 'Projected Profit: Rs.' .($row[0]*2000)."<br><br>";
}
}
?>
<br><br>
<form method="POST" action="home.html">
<input type="submit" class="subm" value="Back">
</form>
</body>
</html>