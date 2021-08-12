<style>
    body{
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: "Arial";
        background-image: linear-gradient(rgb(34, 168, 0), rgb(0, 255, 0));
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHL</title>
</head>
<body>
    
</body>
</html>

<?php


if(isset($_POST["origem"]) && isset($_POST["destino"]) 
&& isset($_POST["distancia"]) && isset($_POST["pedagios"])){

$origem = $_POST["origem"];
$destino = $_POST["destino"];
$distancia = $_POST["distancia"];
$pedagios = $_POST["pedagios"];

$valorDistancia = 6 * $distancia;
$valorPedagios = 9.40 * $pedagios;

$valorPagar = $valorDistancia + $valorPedagios;

echo "<h1>A viagem de $origem à $destino irá custar o valor total de R$$valorPagar</h1>";

}else{
    echo "<h1>Você não enviou as informação corretamente</h1>";
}