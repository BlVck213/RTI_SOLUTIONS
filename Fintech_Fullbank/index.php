<style>
    body{
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: "Arial";
        background-image: linear-gradient(rgb(31, 94, 29), rgb(81, 255, 0));
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fintech Fullbank</title>
</head>
<body>
    
</body>
</html>

<?php

if(isset($_POST["nome"]) && isset($_POST["salario"]) 
&& isset($_POST["genero"]) && isset($_POST["cargo"])){

    $nome = $_POST["nome"];
    $salario = $_POST["salario"];
    $genero = $_POST["genero"];
    $cargo = $_POST["cargo"];

   if($genero == "M"){
       $Ogenero = "O funcionário";
   }elseif($genero == "F"){
    $Ogenero = "A funcionária";
   }elseif($genero == "O"){
    $Ogenero = "E funcionárie";
   }

    if($salario > 5000){
       $aumentoSalarial = $salario * 1.1;
       echo "<h1>$Ogenero $nome passará a receber R$$aumentoSalarial, no cargo de $cargo</h1>";
    }else{
        $aumentoSalarial = $salario * 1.2;
       echo "<h1>$Ogenero $nome passará a receber R$$aumentoSalarial, no cargo de $cargo</h1>";
    }

    
}else{
    echo "<h1>Você não enviou as informação corretamente</h1>";
    exit;
}