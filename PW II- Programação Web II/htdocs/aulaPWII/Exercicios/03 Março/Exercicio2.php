<?php
    // Ler salário
    // Ler departamento
    // Calcular aumento
    //Apresentar o resultado

    $salAtual=1750.1;   //Ler
    $departamento="Operacional";    //Ler
    echo("<h2 align=center>Exercício 2: Aumento Salarial</h2>");

    echo("Departamento: ".$departamento."<br>");
    echo("Salário atual: ".$salAtual."<br>");

    if($salAtual>=1500 && $salAtual <1750){
        $salAtual+=$salAtual*(12/100);
        echo("O seu novo salário será de: ".$salAtual);

    }else if($salAtual>=1750 && $salAtual <2000){
        $salAtual+=$salAtual*(10/100);
        echo("O seu novo salário será de: ".$salAtual);
    }else if($salAtual>=2000 && $salAtual <3000){
        $salAtual+=$salAtual*(7/100);
        echo("O seu novo salário será de: ".$salAtual);
    }else {
        $salAtual+=$salAtual*(5/100);
        echo("O seu novo salário será de: ".$salAtual);
    }

?>