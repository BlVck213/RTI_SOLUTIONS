<style>
    body{
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: "Arial";
        background-image: linear-gradient(rgb(0, 115, 35), rgb(51, 255, 0));
    }
</style>
<?php

if(isset($_POST["nome"]) && isset($_POST["salario"]) 
&& isset($_POST["genero"]) && isset($_POST["cargo"])){

    $nome = $_POST["nome"];
    $salario = $_POST["salario"];
    $genero = $_POST["genero"];
    $cargo = $_POST["cargo"];

   

    if($salario > 5000){
       $aumentoSalarial = $salario + (($salario / 100) * 10);
       echo "<h1>$nome passará a receber R$$aumentoSalarial, no cargo de $cargo</h1>";
    }else{
        $aumentoSalarial = $salario + (($salario / 100) * 20);
       echo "<h1>$nome passará a receber R$$aumentoSalarial, no cargo de $cargo</h1>";
    }

}else{
    echo "<h1>Você não enviou as informação corretamente</h1>";
    exit;
}