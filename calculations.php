<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SH Pizza</title>
<link rel="stylesheet" href="stylesheet.css" />
<link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png" />
<link rel="manifest" href="./images/site.webmanifest" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-orange.min.css" />
</head>
<body>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>


<?php

  $size = $_POST['size'];
   echo("You selected a $size pizza.");
   echo("</br>");

  $topping = $_POST['formTopping'];
    $N = count($topping);
    if ($N > 0){
    echo("You selected $N topping(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($topping[$i] . " ");
    }
  }
  else {
    echo("You did not select any toppings.");
  }

  if ($N == 1){
    $tPrice = floatval(1.00);
  }
  elseif ($N == 2){
    $tPrice = floatval(1.75);
  }
  elseif ($N == 3){
    $tPrice = floatval(2.50);
  }
  elseif ($N == 4){
    $tPrice = floatval(3.35);
  }

  if ($size == "Large") {
    $sPrice = floatval(6.00);
  }
  elseif ($size == "Extra large") {
    $sPrice = floatval(10.00);
  }

$tax = 1.13;
$fPrice =  floatval($sPrice + $tPrice);
$fPrice = floatval($fPrice * $tax);
$fPrice = round($fPrice, 2);

echo("Your pizza will cost $fPrice $");

?>
</body>
</html>
