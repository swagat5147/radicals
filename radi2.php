<?php

	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';
	require 'PHPMailer/src/Exception.php';

  	include ("simple_html_dom.php");

  	$con = mysqli_connect("localhost", "root", "", "radical");

  	$email = "";
	$url = "";
	$c_price = "";
	$t_price = "";

	$query = "SELECT * FROM amazon";
  	$result = mysqli_query($con, $query);
	while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	    $email = $row['email'];
	    $url = $row['url'];
	    $c_price = $row['c_price'];
	    $t_price = $row['t_price'];
	    $id = $row['id'];

    //echo $email;
  	if(strpos($url, 'flipkart') !== false) {
	
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec($ch);
		curl_close($ch);
		#echo $output;

		$html = new simple_html_dom();
		$html->load($output);

		#$tr;

		foreach ($html -> find('div[class=_1vC4OE _3qQ9m1]') as $rety) {
			$tr = str_replace(",", "", $rety);	
			$tz = str_replace("₹", "", $tr);

		}
			$tx = explode(' ', $tz);
			$tg = $tx[2];
			 
			 $tg = explode('>', $tg);
			 $tl = $tg[1];
			 $th = doubleval($tl);
			 //echo $th;

			 if($th<$c_price && $t_price === 0) {

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
			        $mail->Body = "hello, your order ".$url." and your price was ".$c_price." & now is ".$th;
			        $mail->AddAddress($email);

			        if(!$mail->Send()) {
			          echo "Mail not Sent...";
			        }

			        echo "Mail Sent..";

			        $sql = "delete from amazon where id = $id";
			        $mysqli_query($con, $sql);
			 }

			 else if($th<$c_price && $t_price <= $th) {

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
			        $mail->Body = "hello, your order ".$url." and your price was ".$c_price." & now is ".$th;
			        $mail->AddAddress($email);

			        if(!$mail->Send()) {
			          echo "Mail not Sent...";
			        }

			        echo "Mail Sent..";

			        $sql = "delete from amazon where id = $id";
			        $mysqli_query($con, $sql);
			 }


			
		}
     
    else if(strpos($url, 'amazon') !== false) {

  		
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$output = curl_exec($ch);
			curl_close($ch);

			$html = new simple_html_dom();
			$html->load($output);
			foreach ($html -> find('#priceblock_saleprice') as $rety) {
				$tr = str_replace(",", "", $rety);		
				
				}
				$tx = explode(' ', $tr);
				 
				 	$tz= $tx[5];
				 	$te = doubleval($tz);
				 	//echo $te;

				 if($th<$c_price && $t_price === 0) {

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
			        $mail->Body = "hello, your order ".$url." and your price was ".$c_price." & now is ".$th;
			        $mail->AddAddress($email);

			        if(!$mail->Send()) {
			          echo "Mail not Sent...";
			        }

			        echo "Mail Sent..";

			        $sql = "delete from amazon where id = $id";
			        $mysqli_query($con, $sql);
			 }

			 else if($th<$c_price && $t_price <= $th) {
			 	
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
			        $mail->Body = "hello, your order ".$url." and your price was ".$c_price." & now is ".$th;
			        $mail->AddAddress($email);

			        if(!$mail->Send()) {
			          echo "Mail not Sent...";
			        }

			        echo "Mail Sent..";

			        $sql = "delete from amazon where id = $id";
			        $mysqli_query($con, $sql);
			 }
     }

 }



 ?>