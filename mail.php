<?php

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

$con = mysqli_connect("localhost", "root", "", "radical");

$query = "SELECT * FROM amazon";

$email = "";
$url = "";
$c_price = "";
$t_price = "";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    $email = $row['email'];
    $url = $row['url'];
    $c_price = $row['c_price'];
    $t_price = $row['t_price'];

    //echo $email;
}
// echo $url;

   
        

 ?>
