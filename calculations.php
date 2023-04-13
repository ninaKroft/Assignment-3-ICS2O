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

<!-- Simple header with fixed tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
            mdl-layout--fixed-tabs">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Title</span>
    </div>
    <!-- Tabs -->
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
      <a href="./index.html" class="mdl-layout__tab is-active">Tab 1</a>
      <a href="./calculations.php" class="mdl-layout__tab">Tab 2</a>
      <a href="#fixed-tab-3" class="mdl-layout__tab">Tab 3</a>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
  </div>
  <main class="mdl-layout__content">
    <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
      <div class="page-content"><!-- Your content goes here --></div>
    </section>
    <section class="mdl-layout__tab-panel" id="fixed-tab-2">
      <div class="page-content"><!-- Your content goes here --></div>
    </section>
    <section class="mdl-layout__tab-panel" id="fixed-tab-3">
      <div class="page-content"><!-- Your content goes here --></div>
    </section>
  </main>
</div>

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

$fPrice =  floatval($sPrice + $tPrice * 1.13);

echo("Your pizza will cost $fPrice $");

?>
</body>
</html>
