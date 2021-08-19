<?php //A unica coisa que está sendo utilizada nesse arquivo é o "listar" (Select)
class StatusNoticia
{
    private $idStatusNoticia;
    private $descStatusNoticia;

    public function getIdStatusNoticia()
    {
        return $this->idStatusNoticia;
    }
    public function setIdStatusNoticia($idStatusNoticia)
    {
        $this->idStatusNoticia = $idStatusNoticia;
    }
    //----------------------------------
    public function getDescStatusNoticia()
    {
        return $this->descStatusNoticia;
    }
    public function setDescStatusNoticia($descStatusNoticia)
    {
        $this->descStatusNoticia = $descStatusNoticia;
    }
    //----------------------------------

    public function cadastrar($statusnoticia)
    {
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare("INSERT INTO tbstatusnoticia (descStatusNoticia)
                                        VALUES(?)");

        $stmt->bindValue(1, $statusnoticia->getDescStatusNoticia());

        $stmt->execute();
        return 'Status cadastrado com sucesso!!';
    }

    public function listar()
    {
        $conexao = Conexao::pegarConexao();
        $querySelect = "SELECT idStatusNoticia, descStatusNoticia FROM tbstatusnoticia
                        ORDER BY idStatusNoticia";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}
