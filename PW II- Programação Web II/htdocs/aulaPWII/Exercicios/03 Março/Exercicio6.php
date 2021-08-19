<?php
    //Ler um número
    //calcular os multiplos
    //apresentar os multiplos

    echo ("<h2 align=center>Exercício 6: Multiplos</h2>");
    echo ("Os multiplos são:<br>");

    $numero=5;
    $i=1;
    $multiplos;
    do{
        $multiplos=$numero%$i; //10/1
        
        if ($multiplos==0) {
            echo ($i.",");
        }
        $i++;
    }while($i<$numero);
?>