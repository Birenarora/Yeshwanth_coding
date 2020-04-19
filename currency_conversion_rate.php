<!DOCTYPE html>
<html lang="en">
<head>
	<title>Currency Conversion Rate</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="animate.min.css">
</head>
<body>
<?php
$endpoint = 'live';
$access_key = '4ff3bdf36a33dcb42ba2d38574db442b';
$source = 'USD';
$currencies = 'INR';
$format = 1;

// Initialize CURL:
$ch = curl_init('http://api.currencylayer.com/'.$endpoint.'?access_key='.$access_key.'&currencies='.$currencies.'&source='.$source.'&format='.$format);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$exchangeRates = json_decode($json, true);

// Access the exchange rate values, e.g. GBP:
echo "1 USD = ".$exchangeRates['quotes']['USDINR']." INR";
echo "<br>";
echo date('m/d/Y H:i:s', $exchangeRates['timestamp']);
?>
<!-- <h1 class="animated infinite bounce delay-2s">ITS WORKING!!!</h1>
<button class="animated infinite bounce delay-2s" id="btn">Click me!!!</button>
<script src="jquery-3.5.0.min.js"></script>
<script src="package/dist/sweetalert2.all.min.js"></script>
<script>
	$('#btn').on('click', function(){
		Swal.fire({
			type: 'success',
			title: 'Progress',
			text: 'Its Working, Hurray!!!'
		});
	});
</script> -->
</body>
</html>