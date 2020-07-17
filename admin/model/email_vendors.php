<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require '../../vendor/autoload.php';
require '../../controller/config.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_OFF;
$mail->Host = 'mail.esokoni-markets.com';
$mail->Port = 25;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPAuth = true;
$mail->Username = 'sales@esokoni-markets.com';
$mail->Password = 'mIke1998march';
$mail->Subject = 'MESSAGE FROM ADMIN';
$mail->setFrom('sales@esokoni-markets.com');
foreach ($_POST['acs'] as $key) {
  $email = $key;
  $sql = "select * from Vendors where email = '$email'";
  $res = mysqli_query($conn,$sql)->fetch_assoc();
  $name = $res['name'];
  $mail->addAddress($email);


$message = '<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Purchase Design</title>
<style>
* {
  box-sizing: border-box;
}
.column {
  width: 100%;
  padding: 10px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.button{
  background-color: rgb(175, 71, 71);
  border: none;
  padding: 12px;
  text-align: center;
  color: white;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}
.text{
  text-align: left;
}

</style>
</head>
<body>
<br>

<div class="row" align="center">
  <div class="column" style="background-color:rgb(247, 241, 241);" align= "center">
    <img style="width:22%;margin-top: 3px;" src="https://esokonimarkets.com/esokonimarketslogo.png"><br>
    <p class="text,"; style="font-family: sans-serif; font-size: 25px; text-align: center;">Your day to day markets at the palm of your hands.</p>

  </div>
  <div class="column" style="background-color:white;">
    <p class="text"; style="font-family: sans-serif; font-size: 15px;">Dear '.$name.',</p>
    <p class="text"; style="font-family: sans-serif; font-size: 15px;">
    '.$_POST['message'].'
</p>
    
    
    
  </div>
</div>

<div class="row" align="center">
  <div class="column" style="background-color:rgb(247, 241, 241);" align= "center">
    <p class="text,"; style="font-family: sans-serif; font-size: 25px;">Esokoni markets is here to sort all your fashion desires</p>
    <p class="text,"; style="font-family: sans-serif; font-size: 15px;">Get the best prices at the click of a button!</p>
    <a href="esokonimarkets.com" class="button bn">START SHOPPING WITH US TODAY</a>
  </div>
  <div class="column" style="background-color:white;">
    <p class="text"; style="font-family: sans-serif; font-size: 15px;">We would like to hear from you. For any questions, suggestions or comments, please contact us on:</p>
    <p class="text"; style="font-family: sans-serif; font-size: 15px;"><b>Mobile: +2540110002676<br>Email: sales@esokoni-markets.com<br>Location: View Park Towers 11th Floor<b></p>
     
      
  </div>
</div>
</body>
</html>';
$mail->Body = $message;
$mail->AltBody = $message;
$mail->send();
}


header("location:../email_customers.php?suc");


?>