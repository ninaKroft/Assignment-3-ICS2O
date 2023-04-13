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

<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Title</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here -->
    <br>
    <center><h3 class="title">Your order results</h3></center>
    <br>
    <br>
    <br>

    <?php

  $size = $_POST['size'];
   echo "<p class='text'>" . "You selected a $size pizza." . "</p>";
   echo("</br>");

  $topping = $_POST['formTopping'];
    $N = count($topping);
    if ($N > 0){
    echo("You selected $N topping(s): "); "<br>";
    for($i=0; $i < $N; $i++)
    {
      echo "<p class='text'>" . $topping[$i] . "<br>" . "</p"; "<br>";
    }
  }
  else {
    echo "<p class='text'>" . "You did not select any toppings." . "</p>"; "<br>";
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

  if ($size == "large") {
    $sPrice = floatval(6.00);
  }
  elseif ($size == "extra large") {
    $sPrice = floatval(10.00);
  }

$tax = 1.13;
$fPrice =  floatval($sPrice + $tPrice);
$fPrice = floatval($fPrice * $tax);
$fPrice = round($fPrice, 2);

echo "<p class='text'>" . "Your pizza will cost $fPrice $" . "</p>";

?>
<br>
<br>
<br>
<!-- Footer -->
<footer class="mdl-mega-footer">
        <div class="mdl-mega-footer__middle-section">
      
          <div class="mdl-mega-footer__drop-down-section">
            <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer__heading">Features</h1>
            <ul class="mdl-mega-footer__link-list">
              <li><a href="#">About</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Partners</a></li>
              <li><a href="#">Updates</a></li>
            </ul>
          </div>
      
          <div class="mdl-mega-footer__drop-down-section">
            <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer__heading">Details</h1>
            <ul class="mdl-mega-footer__link-list">
              <li><a href="#">Specs</a></li>
              <li><a href="#">Tools</a></li>
              <li><a href="#">Resources</a></li>
            </ul>
          </div>
      
          <div class="mdl-mega-footer__drop-down-section">
            <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer__heading">Technology</h1>
            <ul class="mdl-mega-footer__link-list">
              <li><a href="#">How it works</a></li>
              <li><a href="#">Patterns</a></li>
              <li><a href="#">Usage</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Contracts</a></li>
            </ul>
          </div>
      
          <div class="mdl-mega-footer__drop-down-section">
            <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer__heading">FAQ</h1>
            <ul class="mdl-mega-footer__link-list">
              <li><a href="#">Questions</a></li>
              <li><a href="#">Answers</a></li>
              <li><a href="#">Contact us</a></li>
            </ul>
          </div>
      
        </div>
      
        <div class="mdl-mega-footer__bottom-section">
          <div class="mdl-logo">Title</div>
          <ul class="mdl-mega-footer__link-list">
            <li><a href="#">Help</a></li>
            <li><a href="#">Privacy & Terms</a></li>
          </ul>
        </div>
      
      </footer>
  </div>
  </main>
</div>

</body>
</html>
