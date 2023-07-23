<p class="phpmailerclass">
<?php
if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $trip = $_POST['trip'];
   
   error_reporting(E_ALL & ~E_NOTICE);

   //require("PHPMailer_5.2.4/class.phpmailer.php");
   require("PHPMailer/PHPMailerAutoload.php");
   $mail = new PHPMailer();
   $mail->IsSMTP(); // set mailer to use SMTP
   $mail->SMTPDebug  = 0;
   
   $mail->From = "iwp.jcomp.team5@gmail.com";
   $mail->FromName = "Booking Admin";
   
   $mail->Host = "smtp.gmail.com"; // specif smtp server
   $mail->SMTPSecure= "ssl"; // Used instead of TLS when only POP mail is selected
   
   $mail->Port = 465; // Used instead of 587 when only POP mail is selected
   $mail->SMTPAuth = true;
   
   $mail->Username = "iwp.jcomp.team5@gmail.com"; // SMTP username
   $mail->Password = "giuwtkkyxeeplwyb"; // SMTP password
   
   $mail->AddAddress($email); //replace myname and mypassword to yours
   
   $mail->WordWrap = 50; // set word wrap
   $mail->addAttachment("C:\xampp\htdocs\iwp\Booking.pdf"); // add attachment
   
   $mail->IsHTML(true); // set email format to HTML
   $mail->Subject = 'Booking Confirmation Mail';
   
   $mail->Body = '<p style="font-size:20;">Thank you for booking with us '.$name.' Hopefully you find what you are looking for and have a long Consumer-Business relationship.<br><br>This is a confirmation mail that the email-ID '.$email.' has booked with Holiday Travel Booking Portal for a trip to '.$trip.', you do not need to reply to this email.<br><br>We have attached a copy of Terms and Conditions to be accepted by each user before ordering a product or service if you do not agree to any of the mentioned conditions please refrain from using the website. Using the website is considered as acceptance from the users.<br><br>For any queries please contact us on this email anytime.<br><br><br>Thank you<br>Regards,<br>Admin<br><br><br><br>P.S. Terms & Conditions Document Attached<br></p>';
   
   if($mail->Send()) {$message[] = "Sent Verification Mail Successfully";
    header('Location:feedback.html');}
   else {$message[] = "Failed to send Verification Mail";}

}
?>
</p>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid rgb(220, 216, 216);
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #079964;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
   
<h2>Payment</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form name="payment" method="post" action="">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="name"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="name" name="name" placeholder="Firstname LastName">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="a@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <select id="trip" name="trip">
              <option value="Agra">Agra</option>
              <option value="Goa">Goa</option>
              <option value="Andhaman">Andhaman</option>
              <option value="Varnasi">Varnasi</option>
            </select>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Chennai">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="TN">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="600001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Name">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="ctype">Card Type</label>
            <input type="text" id="ctype" name="ctype" placeholder="Mastercard">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="month" id="expyear" name="expyear" min="2022-09">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="000">
              </div>
            </div>
          </div>
        </div>
        <input type="submit" value="Continue to checkout" class="btn" name="submit">
      </form>
    </div>
</div>

</body>
</html>