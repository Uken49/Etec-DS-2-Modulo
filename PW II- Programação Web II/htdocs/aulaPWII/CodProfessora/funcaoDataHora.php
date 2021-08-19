<?php
    /*Função date() define a variavel como um tipo de data/hora

    A data e hora sempre será a mesma do servidor,nunca do cliente.

    Códigos para o DIA:

    d = dia 01 até 31   ---- Mais usado para dia
    j = dia 1 até 31 (Sem o 0 na frente do 1)
    D = dia Mon até Sun (Dia da semana,só que em inglês)
    l ('L' minúsculo) = Sunday até Saturday (Dia da semana por extenso,em inglês)
    N = dia da semana 1 (para Segunda) até 7 (para Domingo) ---- Mais usado para dia da semana
    w = dia da semana 0 (para Domingo) até 6 (para Sabádo)
    ----------------------------------------------------------
    Códigos para o MÊS:

    F = January até December (Mês por extenso,em inglês)
    M = Jan a Dec (Em inglês)
    m = mês 01 a 12   ----  Mais usado para mês
    n = mês 1 a 12 (Sem o zero na frente do 1)
    t = 28 até 31 (Informa qual o tamanho daquele mês) ---- Muito importante
    ----------------------------------------------------------
    Códigos para o ANO:

    L = 1 ou 0 (1 = Está em ano bissexto e 0 = Não está em ano bissexto) ---- Bastante importante
    Y = ano 1999 ou 2003 (Exibe 4 dígitos nos anos) ---- Mais usado para ano
    y = ano 99 ou 03 (Exibe 2 dígitos nos anos)
    ----------------------------------------------------------
    Códigos para TEMPO:
    
    a = am ou pm
    A = AM ou PM
    g = 1 até 12 (horas)
    G = 0 até 23 (horas)
    h = 01 até 12 (horas)
    H = 00 até 23 (horas)  ---- Mais usado no Brasil
    i = 00 até 59 (minutos)
    s = 00 até 59 (segundos) 
    
    */
    $dia = date('d');
    $mes = date('m');
    $ano = date('Y');

    echo($dia . "/" . $mes . "/" . $ano);

    /*Função getdate() retorna um vetor com todos os parâmetros de data e hora
    cada posição do vetor fornece um parâmetro

    Parâmetros:

    minutes = Retorna os mintos
    hours   = Retorna a hora
    mday    = Retorna o dia do mês
    wday    = Retorna um número de 0 à 6 correspondente ao dia da semana [w]
    mon     = Retorna o mês no formato de 1 à 12 [n]
    year    = Retorna o ano em 4 dígitos [Y]
    yday    = Retorna o dia do ano de 0 à 365
    weekday = Retorna o nome do dia da semana em inglês [l]
    month   = Retorna o nome do mês em inglês [F]
    */

    $agora = getdate();
    echo("<br>" . $agora['mday'] . "/" . $agora['mon'] . "/" . $agora['year']);

    /*Função checkdate() verifica se a data é válida
    retorna "true" se a data for válida e "false" se não for válida.
    Precisa ser informada no padrão americano MM/DD/AAAA
    */

    //          mês, dia, ano
    if (checkdate(12,25,2019)) {
        echo("<br> Data válida");
    }else{
        echo("<br> Data inválida");
    }
?>