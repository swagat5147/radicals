
  <?php

  	include ("simple_html_dom.php");

     $url = $_POST["url"];
     $t_price = $_POST["t_price"];
     $email = $_POST["email"];

     $con = mysqli_connect("localhost", "root", "", "radical");

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
			 echo $th;
			$sql = "INSERT INTO amazon (url, c_price, t_price, email) values('$url', $th, $t_price, '$email')";
		    if($con->query($sql)) {
		      echo "wew";
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

		$sql = "INSERT INTO amazon (url, c_price, t_price, email) values('$url', $te, $t_price, '$email')";
	    if($con->query($sql)) {
	      echo "wew";
	    }

     }


?>

