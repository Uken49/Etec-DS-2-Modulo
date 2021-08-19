<?php
//Ler o número
//Calcular se ele é primo
//Apresentar o resultado


//Não consegui e desisti.
$numero = 2;
$i = 2;
$teste = 0;
echo ("<h2 align=center>Exercício 4: Números Primos</h2>");
echo ("Número: " . $numero . "<br>");

if ($numero < 2) {
    echo ("O número " . $numero . "<b> não é </b>primo.");
} else {
    do {
        $resultado = $numero % $i;
        $i++;
        if ($resultado=0) {
            $teste++;
        }
    } while ($numero >= $i || $teste>=0);

    if ($numero >= $i) {
        echo ("O número " . $numero . "<b> é </b>primo.");
    } else {
        echo ("O número " . $numero . "<b> não é </b>primo.");
    }
}
?>