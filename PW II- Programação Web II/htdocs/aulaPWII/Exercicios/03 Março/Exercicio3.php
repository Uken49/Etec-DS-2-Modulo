<?php
    //Ler base
    //Ler expoente
    //Calcular potência
    //Apresentar o resultado

    $base=5;
    $expoente=4;
    $i=1;
    $resultado=1;
    echo("<h2 align=center>Exercício 3: Potêncialização</h2>");
    echo("Base: ".$base."<br>Expoente: ".$expoente);

    if ($expoente==0) {
        $resultado=1;
    }else{
        do{
            $resultado=$resultado*($base);
            $i++;
        }while ($i <= $expoente);
    }
    echo("<br>Resultado: ".$resultado);
?>