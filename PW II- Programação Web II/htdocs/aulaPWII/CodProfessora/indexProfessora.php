<?php
    /*
    Variáveis, tipos de dados, operadores matemáticos
    PHP: case sensitive; fracamente tipado; não declaro variáveis
    Java: declara a varíavel (int a; String nome;) fortemente tipado
    */
    $nome = "Vanessa";
    echo($nome);

    $a = 5;
    $b = 2;
    
    $soma = $a + $b;
    echo("<br> Soma: " . $soma);//7
    echo("<br> Subtração: " . ($a - $b));//3
    echo("<br> Multiplicação: " . ($a * $b));//10
    echo("<br> Divisão: " . ($a / $b));//2.5
    echo("<br> Resto da divisão: " . ($a % $b));//1

    $parteinteira = (int) ($a / $b);//cast
    echo("<br> Inteiro da divisão: " . $parteinteira);

    //Tomadas de decisão: if; if/else; if encadeado
    //Operadores Relacionais: >, <, >=, <=, ==, !=
    //Operadores lógicos: e (and) && , ou (or) ||, não (not) !
    if($a == 0){
        echo("<br> " . $a . " é nulo.");
    }
    else if ($a > 0){
        echo("<br> " . $a . " é positivo.");
    }
    else{
        echo("<br> " . $a . " é negativo.");
    }

    //switch/case: escolha; exatamente igual
    $diasemana = 9;
    switch($diasemana){
        case 1: case 7: // if ( ($diasemana == 1) || ($diasemana == 7) )
            echo("<br> Hoje é final de semana.");
            break;
        case 2:
            echo("<br> Hoje é segunda-feira.");
            break;
        case 3:
            echo("<br> Hoje é terça-feira.");
            break;
        case 4:
            echo("<br> Hoje é quarta-feira.");
            break;
        case 5:
            echo("<br> Hoje é quinta-feira.");
            break;
        case 6:
            echo("<br> Hoje é sexta-feira.");
            break;
        // case 7:
        //     echo("<br> Hoje é sábado.");
        //     break;
        default:
            echo("<br> Dia da semana inválido.");
            break;
    }

    //Laços de repetição: while, do/while, for
    $num = 7;
    echo("<h2>While</h2>");
    $i = 1;
    while($i <= 10){
        echo($num . " x " . $i . " = " . ($num*$i) . "<br>");
        $i++;
    }

    echo("<h2>Do/While</h2>");
    $i = 1;
    do{
        echo($num . " x " . $i . " = " . ($num*$i) . "<br>");
        $i++;
    }while($i <= 10);
    
    echo("<h2>For</h2>");
    for ($i = 1; $i <= 10; $i++){
        echo($num . " x " . $i . " = " . ($num*$i) . "<br>");
    }
?>