<!DOCTYPE html>
<html>

<head>
  <title>Exercício 07</title>
</head>

<body>

  <?php
  $nc = 0;
  $a1 = 1;
  $a2 = 1;
  echo "1 <BR>1 <BR>";
  for ($i = 0; $i < 50; $i++) {
    $nc = $a1 + $a2;
    $a2 = $a1;
    $a1 = $nc;
    echo "$nc <BR>";
  };
  ?>

</body>

</html>