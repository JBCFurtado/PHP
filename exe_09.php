<!DOCTYPE html>
<html>

<head>
  <title>Exercício 09</title>
</head>

<body>

  <?php
  $estados = array (
    0 => "Parado",
    1 => "Executando",
    2 => "Finalizado",
    "ES" => "Espírito Santo",
    "RJ" => "Rio de Janeiro",
  );

  echo "<PRE>";
  print_r($estados); // Mostra todo array
  echo "<PRE>";
  echo $estados[2] . "<BR>";
  echo $estados["RJ"];

  ?>

</body>

</html>