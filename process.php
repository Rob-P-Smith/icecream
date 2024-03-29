<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>Ice Cream Order Summary</title>
</head>
<body>
<h1>Thank you for your order!</h1>

<?php
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Define constants
define('PRICE_PER_SCOOP', 2.50);
define('SALES_TAX_RATE', 0.11);

//For testing purposes only
echo "<pre>";
var_dump($_POST);
echo "</pre>";

//Get data from POST array
$scoops = $_POST['scoops'];
$flavors = $_POST['flavor'];
$flavorString = implode(", ", $flavors);
$cone = $_POST['cone'];

//calculate total due
$sub_total = $scoops*PRICE_PER_SCOOP;
$tax = $sub_total*SALES_TAX_RATE;
$total = $sub_total+$tax;

//Print a summary
echo "<p>$scoops scoops</p>";
echo "<p>Flavors: $flavorString</p>";
echo "<p>Cone: $cone</p>";
echo "<p>SubTotal: $sub_total</p>";
echo "<p>Tax: $tax</p>";
echo "<p>Total: $total</p>";
echo "<p> test </p>";

?>

</body>
</html>
