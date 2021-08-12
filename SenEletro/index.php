<style>
    body{
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: "Arial";
        background-image: linear-gradient(rgb(219, 0, 0), rgb(255, 0, 0));
    }
    .Background{
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: white; 
        border-radius: 10px;
        flex-direction: column;
        width: 500px;
        height: 300px;
    }
    .text{
        display: flex;
        justify-content: center;
        flex-direction: column;
    }
    .divs{
        display:flex;
        flex-direction: column;
        justify-content: center;
        padding: 3px;
        margin-left: 15px;
    }
   
</style>

    <html>
        <head>
        <link rel="stylesheet" href="styles.css"/>
        </head>
    </html>
<?php

if(isset($_POST["nome"]) && isset($_POST["endereco"]) 
&& isset($_POST["consumo"])){

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$consumo = $_POST["consumo"];

if($consumo >= 120){
    $class = "Vermelho";
    $valorConsumo = 0.42;
}elseif($consumo < 120){
    $class = "Azul";
    $valorConsumo = 0.32;
}

$valorPagar = $valorConsumo * $consumo;


}else{
    echo "<h1>Você não enviou as informação corretamente</h1>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SenEletro</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <div class="Background">
        <div class="text">

        <div class="divs">
            <h1>Conta de luz de <?=$nome?></h1>
        </div>
        <div class="divs">
            <h1>Endereço: <?=$endereco?></h1>
        </div>
        <div class="divs">
            <h1 class="<?= $class ?>">Consumo: <?=$consumo?>kWh</h1>
        </div>
        <div class="divs">
            <h1>Valor à Pagar: R$<?=$valorPagar?></h1>
        </div>
       </div>
   </div>
</body>
</html>

