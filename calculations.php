<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SH Pizza</title>
</head>
<body>
<?php
  $topping = $_POST['formTopping'];
    $N = count($topping);

    echo("You selected $N topping(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($topping[$i] . " ");
    }
?>
</body>
</html>
