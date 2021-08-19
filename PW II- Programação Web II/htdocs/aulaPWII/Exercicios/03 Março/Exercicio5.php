<?php
    echo ("<h2 align=center>Exercício 5: Fibonacci</h2>");

    $anterior=0;
    $atual=1;
    $proximo=0;
    $enesimo=15;

    do{
        echo($atual.",");
        $proximo=$atual+$anterior;
        $anterior=$atual;
        $atual=$proximo;
        $enesimo--;
    }while ($enesimo >=1 );
?>