<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Exemplos de funções</title>
  <?php
  function cabecalho()
  {
    echo "PROGRAMA DE TESTE DE FUNÇÕES<BR>";
  }
  function quadrado($n)
  {
    return ($n * $n); // Retorna o resultado
  }
  function soma($n1, $n2)
  {
    return ($n1 + $n2);
  }
  ?>
</head>

<body>
  <?php
  $x = 4;
  $resQ = quadrado($x);
  $resS = soma($x, $x);
  cabecalho();
  echo "O quadrado de $x é $resQ <BR>";
  echo "A soma de $x é $resS <BR>";
  ?>
</body>

</html>