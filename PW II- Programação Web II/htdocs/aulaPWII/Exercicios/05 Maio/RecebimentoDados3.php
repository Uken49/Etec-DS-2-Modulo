<?php
    $cpf = $_POST['txtCpf'];
    $cpf = str_replace(".","",$cpf);
    $cpf = str_replace(",","",$cpf);

    $numerosCpf = array();

    for($i=0; $i < (strlen($cpf) ); $i++){
        $numerosCpf = substr($cpf,$i,1);
    }

    //Calculando o primeiro digito após o traço do cpf
    
    $contador = 10;
    $soma1 = 0;
    for($i=0; $i < 9; $i++){
        $soma1 = $soma1 + ($numerosCpf[$i] * $contador);
        $contador--;
    }
    $digito1 = ($soma1 % 11);
    if ($digito1 < 2){
        $digito1 = 0;
    }
    else{
        $digito1 = 11 - $digito1;
    }

    //Calculando o segundo digito após o traço do cpf
    $contador = 11;
    $soma2 = 0;
    for($i = 0; $i < 9; $i++){
        $soma2 = $soma2 + ($numerosCpf[$i] * $contador);
        $contador--;
    }
    $soma2 = $soma2 + ($digito1 * $contador);
    
    $digito2 = ($soma2 % 11);
    if ($digito2 < 2)
        $digito2 = 0;
    else
        $digito2 = 11 - $digito2;
    
    //verificando se os dígitos informados são iguais aos calculados
    if(($digito1 == $numerosCpf[9]) && ($digito2 == $numerosCpf[10]))
        echo("<h1>CPF válido</h1>");
    else
        echo("<h1>CPF inválido</h1>");
    
?>
