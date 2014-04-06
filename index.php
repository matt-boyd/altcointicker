<html>
<head>
</script>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
</head>
<body>
<center>
<div id="container">
<span>
<?php
function price($x){
$response = file_get_contents($x);
$object = json_decode($response);
$price = $object->value;
echo "$" . $price;
}
$today = date("m-d-y"); 
echo "<h1> Alt-Coin Ticker </h1>" . "<hr />";
echo "<h5><b>Today's date: $today</h5></b>" . "<hr />";

echo "<h6>Bitcoins</h6>";
echo price("https://api.vircurex.com/api/get_lowest_ask.json?base=BTC&alt=USD") . "<br>"; 

echo "<h6>Litecoins</h6>";
echo price("https://api.vircurex.com/api/get_lowest_ask.json?base=LTC&alt=USD") . "<br>"; 

echo "<h6>Peercoins</h6>";
echo price("https://api.vircurex.com/api/get_lowest_ask.json?base=PPC&alt=USD") . "<br>"; 

echo "<h6>Dogecoins</h6>";
echo price("https://api.vircurex.com/api/get_lowest_ask.json?base=DOGE&alt=USD") . "<br>"; 

echo "<br />";
echo "<div id='footer'><b>DISCLAIMER: Please remember that all these prices are rounded down.</b></div>";
?>
</span>
</div>
</body>
</html>