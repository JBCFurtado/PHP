<!DOCTYPE html>
<html>

<head>
  <title>Exercício 09</title>
</head>

<body>

  <?php
  function troca (&$n1, &$n2){
    // Troca os valores
    $aux = $n1;
    $n1 = $n2;
    $n2 = $aux;
  }
  $x = 4;
  $y = 5;
  echo "ANTES: X = $x e Y = $y <BR>";
  troca($x, $y);
  echo "DEPOIS: X = $x e Y = $y <BR>";

  ?>

</body>

</html>