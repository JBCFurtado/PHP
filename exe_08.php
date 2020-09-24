<!DOCTYPE html>
<html>

<head>
  <title>Exercício 08</title>
</head>

<body>

  <?php
  $estados[0] = "Parado";
  $estados[1] = "Executando";
  $estados[2] = "Finalizado";
  $estados["ES"] = "Espírito Santo";
  $estados["RJ"] = "Rio de Janeiro";
  echo "<PRE>";
  print_r($estados); // Mostra todo array
  echo "<PRE>";
  echo $estados[2] . "<BR>";
  echo $estados["RJ"];
  ?>

</body>

</html>