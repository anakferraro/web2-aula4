<?php
  $genero = $_GET["genero"] ?? "";
  $tam = $_GET["tamanho"] ?? "";
  $quantidade = intval($_GET["quantidade"] ?? 0);

  // Garante que a quantidade fique entre 1 e 9, mesmo se a URL for alterada manualmente
  if ($quantidade < 1) {
      $quantidade = 1;
  } elseif ($quantidade > 9) {
      $quantidade = 9;
  }

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

  $desconto = $quantidade * 3; // 3% por item: mínimo 3% (1 item), máximo 27% (9 itens)

  $subtotal = $valor * $quantidade;
  $total = $subtotal * (1 - $desconto / 100);

  echo "Valor unitário: R$" . number_format($valor, 2, ',', '.') . "<br>";
  echo "Quantidade: " . $quantidade . "<br>";
  echo "Desconto aplicado: " . $desconto . "%<br>";
  echo "Valor total: R$" . number_format($total, 2, ',', '.');
?>
