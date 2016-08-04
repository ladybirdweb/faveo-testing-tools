<?php

$Email = $_POST["Email"];
$Password = $_POST["Password"];
$Host = $_POST["Host"];
$Port = $_POST["Port"];
if ($_POST["Protocol"]) {
    $Protocol = '/' . $_POST["Protocol"];
} else {
    $Protocol = "";
}
if ($_POST["Encryption"]) {
    $Encryption = '/' . $_POST["Encryption"];
} else {
    $Encryption = "";
}

echo 'Email = ' . $Email . '<br>';
echo 'Password = ' . $Password . '<br>';
echo 'Host = ' . $Host . '<br>';
echo 'Port = ' . $Port . '<br>';
echo 'Protocol = ' . $Protocol . '<br>';
echo 'Encryption = ' . $Encryption . '<br>';

echo '<br><br><br> email config = ';
// checking config for connection
$config = "{" . $Host . ":" . $Port . $Protocol . $Encryption . "}";
var_dump($config);

echo "Result = ";
// connecting to email via imap 
var_dump(imap_open("{" . $Host . ":" . $Port . $Protocol . $Encryption . "}", $Email, $Password));

echo "if result comes in 'resource' then the connection was succesfull";
?>