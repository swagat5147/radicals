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

                    $mail = new PHPMailer\PHPMailer\PHPMailer();
                    $mail->IsSMTP(); // enable SMTP

                    $mail->SMTPDebug = 2;
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->SMTPSecure = 'ssl';
                    $mail->Username = 'samantaray.asish04@gmail.com';
                    $mail->Password = 'asishdfg';
                    $mail->SMTPSecure = 'tls';
                    $mail->IsHTML(true);
                    $mail->Port = 587;
                    $mail->SetFrom('samantaray.asish04@gmail.com');
                    $mail->Subject = "Radical Notifier";
                    $mail->Body = "hello, your order ".$url." and your price is ".$c_price;
                    $mail->AddAddress($email);

                    if(!$mail->Send()) {
                      echo "Mail not Sent...";
                    }

                    echo "Mail Sent..";
// echo $url;

   
        

 ?>
