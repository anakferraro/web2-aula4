<?php

$texto = trim($_GET["texto"] ?? "");
$corFundo = trim($_GET["corFundo"] ?? "#ffffff");
$corTexto = trim($_GET["corTexto"] ?? "#000000");

echo '<p style="background-color: ' . htmlspecialchars($corFundo) . '; color: ' . htmlspecialchars($corTexto) . '; padding: 10px;">' . htmlspecialchars($texto) . '</p>';

?>
