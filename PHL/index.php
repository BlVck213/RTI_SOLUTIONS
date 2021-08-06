<style>
    body{
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: "Arial";
    }
</style>

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