<!DOCTYPE html>
<html>

<head>
  <title>Exercício 04</title>
</head>

<body>

  <?php
  $n1 = 10;
  $n2 = 5;
  $op = "*"; //altere a opção para testar
  switch ($op) {
    case "+":
      echo "Soma = " . ($n1 + $n2);
      break;
    case "-":
      echo "Subtração = " . ($n1 - $n2);
      break;
    case "*":
      echo "Multiplicação = " . ($n1 * $n2);
      break;
    case "/":
      echo "Divisão = " . ($n1 / $n2);
      break;
    default:
      echo "Operação Inválida!";
  }
  ?>

</body>

</html>