<?php
  $genero = $_GET["genero"];
  $tam = $_GET["tamanho"];
  
  if ($tam == "p") {
      $valor = -5;
  } elseif ($tam == "m") {
      $valor = 1;
  } else {
      $valor = 10;
  }
  
  if ($genero == "masc") {
      $valor = $valor + 30;
  } else {
      $valor = $valor + 25;
  }
  
  echo "Valor da camiseta: R$" . $valor;
?>
