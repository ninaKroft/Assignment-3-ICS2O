<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SH Pizza</title>
</head>
<body>
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
?>
</body>
</html>
