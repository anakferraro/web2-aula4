<?php

$email = $_GET["email"];

echo "Seu email: " . $email . "<br>";

if (!isset($_GET["noticia"]) && !isset($_GET["promocao"])) {
    echo "Assinatura cancelada.";
} else {

    if (isset($_GET["noticia"])) {
        echo "Você receberá noticias no email.<br>";
    }

    if (isset($_GET["promocao"])) {
        echo "Você receberá promocoes no email.";
    }
}

?>
