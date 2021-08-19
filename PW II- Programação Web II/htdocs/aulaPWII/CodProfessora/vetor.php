<?php

    //Não é possível imprimir um vetor inteiro sem laço de repetição.

    $vetor = array(5,2,10);
    //posição [0]=5, [1]=2, [2]=10

    print_r($vetor);
    //Serve para mostrar o vetor.Normalmente usado só para teste

    $vetor2 = array(
        5 => 1,
        7 => 2,
        9 => 3
    );
    //Criando o vetor APENAS nas posições 5,7 e 9.
    echo("<br>");
    print_r($vetor2);

    $array1 = array(
    1 => "a",
    2 => "b",
    "oi"=> "c"
    );
    echo("<br>");
    print_r($array1);

    $cliente = array(
        "codigo" => 1,
        "nome" => "José",
        "cpf" => "111.222.33-96"
    );
    echo("<br>");
    print_r($cliente);

    echo("<br>Cliente: ".$cliente['codigo']." - ".$cliente['nome']);
    //Imprimindo uma posição especifica do vetor $cliente

    $vetor3 = array(
        5 => 1,
        12 => 2,
        "a" => 3
    );
    echo("<br><br>");
    print_r($vetor3);

    $vetor3[] = 4;
    echo("<br>depois de inserir o elemento 4<br>");
    print_r($vetor3);
    //Inserindo um número no vetor depois dele ter sido criado e sem especificar aonde ele vai ser colocado.
    //Ele não entende ordem alfabética,ele coloca depois do número mais alto (mesmo se estiver decrescendo).

    $vetor3["x"] = 5;
    //Inserindo um número especificando a posição.

    unset($vetor3[5]);
    //Deletando uma posição do vetor -- Se não especificar a posição,o vetor todo é deletado.
    echo("<br>");
    print_r($vetor3);
    echo("<br>");

    $vetor = array(1,2,3,4);

    for ($i=0; $i <4; $i++) { 
      print($vetor [$i]." - ");
    }
    echo("<br><br>");
    //Imprimindo o vetor com laço de repetição.

    foreach ($vetor as $value){
        $multi = $value * 2;
        echo($value."x 2 = ".$multi."<br>");
    }
    //Ele olha cada posição do vetor e guarda em uma nova variavel,
    //assim mesmo se a posição for um nome,ele consegue ler (diferente do for,do while e while).

    $size = count($vetor);
    echo ("<br> Tamanho do vetor ".$size);
    //count serve para verificar o tamanho do vetor.


?>