<?php

class Conexao
{
    public static function pegarConexao()
    {
        /*
            $variavel = new PDO(
                tipo:host=local; 
                dbname=nome do banco,
                usuário de acesso ao banco, 
                senha de acesso ao banco
            )
        */
        //conexão local
        // $conexao = new PDO("mysql:host=localhost;
        //                     dbname=bdaulapdo", 
        //                     "root",
        //                     "");
        
        //conexão on line - hospedado
        $conexao = new PDO("mysql:host=fdb22.awardspace.net;
                            dbname=3178009_bdaulapdo", 
                            "3178009_bdaulapdo",
                            "VanessaAlinepw2");

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("SET CHARACTER SET utf8");
        
        return $conexao;
    }
}