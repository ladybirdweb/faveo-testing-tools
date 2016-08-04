<?php
error_reporting(E_ALL & ~E_NOTICE);
// Calling the PHP mailer class
require '/PHPMailer-master/PHPMailerAutoload.php';

$Email = $_POST["Email"];
$To = $_POST["To"];
$Name = $_POST["Name"];
$Password = $_POST["Password"];
$Host = $_POST["Host"];
$Port = $_POST["Port"];
$Encryption = $_POST["Encryption"];
$validation = "";
if($_POST["validation"]) {
	$validation = $_POST["validation"];	
} else {
	$validation = null;
}

echo 'From Email : ' . $Email .'<br>'; 
echo 'Password : ' . $Password .'<br>';
echo 'Host : ' . $Host .'<br>'; 
echo 'Port : ' . $Port .'<br>'; 
echo 'Encryption : ' . $Encryption .'<br>'; 
echo 'Enable Validation Check : ' . $validation .'<br><br><br>';

echo 'Address to where test email to be send : ' . $To .'<br>';
echo 'Name of the person to whome email is sent : ' . $Name .'<br><br>';

$mail = new PHPMailer;

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = $Host;  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $Email;                 // SMTP username
$mail->Password = $Password;                           // SMTP password
$mail->SMTPSecure = $Encryption;                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = $Port;                                    // TCP port to connect to

$mail->setFrom($Email, 'Testing');
$mail->addAddress($To, $Name);     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'This is a connection test email';
$mail->Body    = 'This is a connection test email for SMTP';

if(!$mail->send()) {
    echo '<h3>Result : Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo.'</h3>';
} else {
    echo '<h3>Result : Message has been sent</h3>';
}