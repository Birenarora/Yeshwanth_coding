<!DOCTYPE html>
<html lang="en">
<head>
	<title>Currency Conversion Rate</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="animate.min.css">
</head>
<body>
	<center>
		<?php
		$endpoint = 'live';
		$access_key = '4ff3bdf36a33dcb42ba2d38574db442b';
		$source = 'USD';
		$currencies = 'INR';
		$format = 1;

		$ch = curl_init('http://api.currencylayer.com/'.$endpoint.'?access_key='.$access_key.'&currencies='.$currencies.'&source='.$source.'&format='.$format);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$json = curl_exec($ch);
		curl_close($ch);

		$exchangeRates = json_decode($json, true);

// Access the exchange rate values, e.g. GBP:
// echo "1 USD = ".$exchangeRates['quotes']['USDINR']." INR";
// echo "<br>";
// echo date('m/d/Y H:i:s', $exchangeRates['timestamp']);
		echo "<h1 class='animated infinite heartBeat'>1 USD = ".$exchangeRates['quotes']['USDINR']." INR</h1>";
		echo "<br>";
		echo "<h2 class='animated infinite heartBeat'>".date('m/d/Y H:i:s', $exchangeRates['timestamp'])."</h2>";
		?>

</center>
</body>
</html>