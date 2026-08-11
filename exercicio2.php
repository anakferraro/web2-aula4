<?php

$email = trim(strtolower($_GET["email"] ?? ""));
$senha = trim($_GET["senha"] ?? "");

if ($email === "fulano@gmail.com" && $senha === "1234Thanos") {
    echo "Correto!";
} else {
    echo "Dados incorretos!";
}

?>
