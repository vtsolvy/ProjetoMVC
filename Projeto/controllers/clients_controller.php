<?php
require_once('./models/client.php');

class ClientController {
    private $clientModel;

    function __construct()
    {
        $this->clientModel = new Client();
    }
    
    function getAll() {
        $resultSet = $this->clientModel->getAll();
        require_once('./views/client_list.php');
    }

    function create_client() {
        if (isset($_POST['codigo'], $_POST['nome'], $_POST['email'], $_POST['telefone'])) {
            $codigo = $_POST['codigo'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            try{
                $this->clientModel->cadastrar($codigo, $nome, $email, $telefone);
                header('Location: ./index.php?acao=index');
            } catch (PDOException $e) {
                echo "<script>alert('Ocorreu um erro ao cadastrar! Tente novamente!')</script>";
            }
        }
        require_once('./views/client_create.php');
    }

    public function update_client($codigo) {
        $cli = $this->clientModel->selecionar_codigo($codigo);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $this->clientModel->alterar($codigo, $nome, $email, $telefone);
            header('Location: ./index.php?acao=index');
            exit;
        }
        require_once('./views/client_update.php');
    }

    function delete_client($codigo){
        $this->clientModel->selecionar_codigo($codigo);
        $result = $this->clientModel->deletar($codigo);
        return $result;
    }
}
?>

