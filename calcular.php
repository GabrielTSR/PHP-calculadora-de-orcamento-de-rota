<?php


if (
    isset($_POST["cidade-origem"]) && isset($_POST["cidade-destino"])
    && isset($_POST["distancia-entre-cidades"]) && isset($_POST["quantia-pedagios"])
) {

    $cidadeOrigem = $_POST["cidade-origem"];
    $cidadeDestino = $_POST["cidade-destino"];
    $distanciaEntreCidades = $_POST["distancia-entre-cidades"];
    $quantiaPedagios = $_POST["quantia-pedagios"];

    $valor = number_format(($distanciaEntreCidades * 6) + ($quantiaPedagios * 9.40), 2, ',', '.');

    $texto = "A viagem de $cidadeOrigem à $cidadeDestino irá custar o valor total de R$$valor.";

} else {
    echo "<h1>Você não enviou as informações corretamente</h1>";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="styles.css" rel="stylesheet" />
</head>

<body>
    <h1>Valor total:</h1>
    <p><?= $texto ?></p>
</body>

</html>