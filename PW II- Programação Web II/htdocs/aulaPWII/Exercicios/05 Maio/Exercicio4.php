<?php
    //Obs: Eu iria fazer Orientado à Objeto,porém não sei como fazer isso em php (ainda) =c
    $data = getdate();
    $mesEscrito = date('M');
    $mes = date('m');
    $dia = date('d');
    
    //Traduzindo os meses por extenso.
    switch ($data['month']) {
        case 'January':
            $data['month']='janeiro';
            break;
        case 'February':
            $data['month']='fevereiro';
            break;
        case 'March':
            $data['month']='março';
            break;
        case 'April':
            $data['month']='abril';
            break;
        case 'May':
            $data['month']='maio';
            break;
        case 'June':
            $data['month']='junho';
            break;
        case 'July':
            $data['month']='julho';
            break;
        case 'August':
            $data['month']='agosto';
            break;
        case 'September':
            $data['month']='setembro';
            break;
        case 'October':
            $data['month']='outubro';
            break;
        case 'November':
            $data['month']='novembro';
            break;
        case 'December':
            $data['month']='dezembro';
            break;
        default:
            
        break;
    }

    //Traduzindo os meses encurtados
    switch ($mesEscrito) {
        case 'Jan':
            $mesEscrito='jan';
            break;
        case 'Feb':
            $mesEscrito='fev';
            break;
        case 'Mar':
            $mesEscrito='mar';
            break;
        case 'Apr':
            $mesEscrito='abr';
            break;
        case 'May':
            $mesEscrito='maio';
            break;
        case 'June':
            $mesEscrito='jun';
            break;
        case 'Jul':
            $mesEscrito='jul';
            break;
        case 'Aug':
            $mesEscrito='ago';
            break;
        case 'Sept':
            $mesEscrito='set';
            break;
        case 'Oct':
            $mesEscrito='out';
            break;
        case 'Nov':
            $mesEscrito='nov';
            break;
        case 'Dec':
            $mesEscrito='dec';
            break;
        default:
            
        break;
    }
    //Traduzindo semanas
    switch ($data['weekday']) {
        case 'Monday':
            $data['weekday']='Segunda';
            break;
        case 'Tuesday':
            $data['weekday']='Terça';
            break;
        case 'Wednesday':
            $data['weekday']='Quarta';
            break;
        case 'Thursday':
            $data['weekday']='Quinta';
            break;
        case 'Friday':
            $data['weekday']='Sexta';
            break;
        case 'Saturday':
            $data['weekday']='Sábado';
            break;
        case 'Sunday':
            $data['weekday']='Domingo';
            break;
        default:
            
        break;
    }
    echo("São Paulo,".$dia." de ".$data['month']." de ".$data['year'].".<br>");
    echo($dia."/".$mes."/".$data['year']."<br>");
    echo($dia." ".$mesEscrito." ".$data['year']."<br>");
    echo($data['weekday'].",".$dia." de ".$data['month']." de ".$data['year'].".<br>");
    echo($dia."/".$mes."/".$data['year']." ".$data['hours']."h:".$data['minutes']);

?>