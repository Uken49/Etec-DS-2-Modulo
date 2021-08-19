<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 2</title>
    </head>
    <body>
    <h2 align="center">Exercicio 2 - Armazenamento de siglas e capitais</h2>
        <?php
            $siglasCapitais=array(
                'capital1' => 'Acre'
                ,'sigla1' => 'AC'

                ,'capital2' => 'Alagoas'
                ,'sigla2' => 'AL'
                
                ,'capital3' => 'Amapá'
                ,'sigla3' => 'AP'

                ,'capital4' => 'Amazonas'
                ,'sigla4' => 'AM'

                ,'capital5' => 'Bahia'
                ,'sigla5' => 'BA'

                ,'capital6' => 'Ceará'
                ,'sigla6' => 'CE'

                ,'capital7' => 'Espírito Santo'
                ,'sigla7' => 'ES'

                ,'capital8' => 'Goiás'
                ,'sigla8' => 'GO'

                ,'capital9' => 'Maranhão'
                ,'sigla9' => 'MA'
                
                ,'capital10' => 'Mato Grosso'
                ,'sigla10' => 'MT'
            );
            
            $i=0;
            foreach($siglasCapitais as $value){
                if ($i%2==0) {
                    echo("Estado: ".$value." - ");
                }else {
                    echo($value."<br>");
                }
                $i++;
            }
        ?>
    </body>
</html>