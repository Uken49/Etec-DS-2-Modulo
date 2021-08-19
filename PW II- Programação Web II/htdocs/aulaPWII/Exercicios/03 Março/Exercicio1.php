<?php
    //Ler as notas (x4)
    //Calcular a média
    //Apresentar o resultado

    $nota1 = 0.9;   //Ler
    $nota2 = 9;     //Ler
    $nota3 = 8;     //Ler
    $nota4 = 2;     //Ler

    $media = ($nota1 +$nota2 +$nota3+$nota4)/4;


    echo("<h2 align=center>Exercício 1: Nota final</h2>");
    echo("<b>Notas do aluno</b>
    <br>Nota 1: ".$nota1."<br>Nota 2: ".$nota2."<br>Nota 3: ".$nota3."<br>Nota 4: ".$nota4);

    if ($nota1 <=0 && $nota1 <=4.9) {
        echo("<br><br>Nota final: ".$media."<br>Aluno retido.");

    }else if ($nota1 <=5 && $nota1 <=6.9) {
        echo("<br><br>Nota final: ".$media."<br>Aluno em exame.");

    }else {
        echo("<br><br>Nota final: ".$media."<br>Aluno promovido.");
    }

?>




