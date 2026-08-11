<?php
$meio = trim(strtolower($_GET["transporte"] ?? ''));

if ($meio == "carro") {
    echo '<img src="https://argo.fiat.com.br//asset/versions/358AFB1/249.webp" alt="">';

} elseif ($meio == "van") {
    echo '<img src="https://cdn.motor1.com/images/mgl/2NNy9E/s1/fiat-scudo-cargo-77.jpg" alt="">';

} elseif ($meio == "bicicleta") {
    echo '<img src="https://cdn.awsli.com.br/600x1000/2647/2647048/produto/232171778/vde-2-8xl3wsqir9.jpg" alt="">';

} elseif ($meio == "ape") {
    echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5jNBlbZMMxbHm7IgZzdkXaeKN77_7XsDdhnHXNm62eA&s=10" alt="">';

} elseif ($meio == "onibus") {
    echo '<img src="https://www.volvogroup.com/content/dam/volvo-group/markets/brazil/classic/news/2020/nov/1860x1050-image-press-releases-onibus-cidade-alta.jpg" alt="">';
}
?>
