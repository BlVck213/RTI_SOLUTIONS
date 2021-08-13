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

   
    $aumentoSalarial = $salario > 5000 ? $salario * 1.1 : $salario * 1.2;

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
        background-image: linear-gradient(rgb(31, 94, 29), rgb(81, 255, 0));
    }
    div{
        display: flex;
        padding: 20px;
        background-color: white;
        border: 2px solid black;
        border-radius: 10px;
        -webkit-user-select: none;  
        -moz-user-select: none;     
        -ms-user-select: none;      
        user-select: none;  
    }
    em{
        color: rgb(91, 241, 22);
        font-style: normal;
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
    <div>
        <h1><?=$Ogenero?> <?=$nome?> passará a receber R$<em><?=$aumentoSalarial?></em>, no cargo de <em><?=$cargo?></em></h1>
    </div>

</body>
</html>