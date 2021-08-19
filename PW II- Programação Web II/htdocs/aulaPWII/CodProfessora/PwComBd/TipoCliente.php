<?php

class TipoCliente{
    private $idtipocliente;
    private $desctipocliente;

    public function getIdTipoCliente(){
        return $this->idtipocliente;
    }
    public function getDescTipoCliente(){
        return $this->desctipocliente;
    }
    public function setIdTipoCliente($idtipocliente){
        $this->idtipocliente = $idtipocliente;
    }
    public function setDescTipoCliente($desctipocliente){
        $this->desctipocliente = $desctipocliente;
    }
    
    public function listar(){
        $conexao = Conexao::pegarConexao();
        $querySelect = "select idtipocliente, desctipocliente
        from tbtipocliente";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }
}