<?php
    
    $cpf=$_POST['txtCpf'];
    $dataNasct=$_POST['dateDataNasct'];

    $dadosUsuario = array(
        "nome" => $nome = $_POST['txtNome']
        ,"cpf" =>  $cpf=$_POST['txtCpf']
        ,"dataNasct" => $dataNasct=$_POST['dateDataNasct']
    );

    echo("Nome: ".$dadosUsuario['nome']
    ."<br>Cpf: ".$dadosUsuario['cpf']
    ."<br>Data de nascimento: ".$dadosUsuario['dataNasct'])
?>