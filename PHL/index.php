<?php


if(isset($_POST["origem"]) && isset($_POST["destino"]) 
&& isset($_POST["distancia"]) && isset($_POST["pedagios"])){

$origem = $_POST["origem"];
$destino = $_POST["destino"];
$distancia = $_POST["distancia"];
$pedagios = $_POST["pedagios"];


$valorPagar = ($distancia * 6) + ($pedagios * 9.40);

}else{
    echo "<h1>Você não enviou as informação corretamente</h1>";
    exit;
}
?>

<style>
    body{
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: "Arial";
        background-image: linear-gradient(rgb(0, 119, 255), rgb(0, 238, 255));
    }
    .resultado{
    font-size: 30px;
    }
    .resultado > em{
    font-size: 40px;
    font-style: normal;
    font-weight: bold;
    color: red;
    }
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"/>
    <title>PHL</title>
</head>
<body>
    
    <h1 class="resultado">A Viagem de <?=$origem?> para <?=$destino?> irá custar o valor total de <em>R$<?=$valorPagar?></em></h1>
</body>
</html>