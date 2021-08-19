<?php
    $nome = $_POST['txtNome'];
    $cpf = $_POST['txtCpf'];
    $dtNascto = $_POST['txtDtNascto'];
   
    $codescola = $_POST['escolas'];

    $codfase = $_GET['codfase'];

    switch($codescola){
        case 125:
            $nomeescola = "E.E. Ernestina Del Buono Trama";
            break;
        case 135:
            $nomeescola = "E.E. Rocca Dordal";
            break;
        case 145:
            $nomeescola = "E.E. Zipora Rubisntein";
            break;
        case 155:
            $nomeescola = "E.E. Paulo Sarasate";
            break;
    }

    echo("Fase de vacinação: ".$codfase);
    echo("<br> Escola: ".$codescola." - ".$nomeescola);
    echo("<br> Sr(a). ".$nome." foi cadastrado para campanha de vacinação.");

?>