<?php
require_once('./configuration/connect.php');

class Client extends Connect {
    private $table;
    
    function __construct() {
        parent::__construct();
        $this->table = 'clientes';
    }

    function getAll() {
        $acessoBanco = $this->connection->query("select * from $this->table");
        $resultSet = $acessoBanco->fetchAll();
        return $resultSet;
    }
    function cadastrar($codigo, $nome, $email, $telefone) {
        $stmt = $this->connection->prepare("INSERT INTO $this->table (codigo, nome, email, telefone) VALUES (:codigo, :nome, :email, :telefone)");
        $stmt->bindParam(':codigo', $codigo);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->execute();
    }

    function alterar($codigo, $nome, $email, $telefone) {
        $stmt = $this->connection->prepare("UPDATE $this->table SET codigo = :codigo, nome = :nome, email = :email, telefone = :telefone WHERE codigo = :codigo");
        $stmt->bindParam(':codigo', $codigo);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->execute();
    }

    function deletar($codigo){
        $stmt = $this->connection->prepare("DELETE FROM $this->table WHERE codigo = :codigo");
        $stmt->bindParam(':codigo', $codigo);
        $stmt->execute();
    }

    function selecionar_codigo($codigo) {
        $stmt = $this->connection->prepare("SELECT * FROM $this->table WHERE codigo = :codigo");
        $stmt->bindParam(':codigo', $codigo);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
