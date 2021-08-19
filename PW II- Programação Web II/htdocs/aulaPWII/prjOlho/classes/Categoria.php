<?php

class Categoria
{
    private $idCategoria;
    private $descCategoria;

    public function getIdCategoria(){
        return $this->idCategoria;
    }
    public function setIdCategoria($idCtgr){
        $this->idCategoria = $idCtgr;
    }
    //----------------------------------

    public function getDescCategoria(){
        return $this->descCategoria;
    }
    public function setDescCategoria($descCategoria){
        $this->descCategoria = $descCategoria;
    }
    //----------------------------------

    public function cadastrar($categoria)
    {
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare("INSERT INTO tbcategoria (descCategoria)
                                        VALUES(?)");

        $stmt->bindValue(1, $categoria->getDescCategoria());
        $stmt->execute();
        return 'Cadastro realizado com sucesso';
    }
    public function listar()
    {
        $conexao = Conexao::pegarConexao();
        $querySelect = "SELECT idCategoria, descCategoria FROM tbcategoria
                        ORDER BY idCategoria";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}
