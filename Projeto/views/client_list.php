<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Clientes</title>
</head>
<body>
    <div class="container content mt-5">
    <h1> Listagem de Clientes </h1>
        <table>
            <a class="btn btn-success" href="./index.php?acao=cadastrar">Novo Cadastro</a>
            <div class="row mt-4">
            <table id="usertable" class="table table-striped table-light justify-content-center align-items-center">
                <thead class="justify-content-center align-items-center">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultSet as $linha): ?>
                    <tr>
                        <td>
                            <?= $linha['codigo'] ?>
                        </td>
                        <td>
                            <?= $linha['nome'] ?>
                        </td>
                        <td>
                            <?= $linha['email'] ?>
                        </td>
                        <td>
                            <?= $linha['telefone'] ?>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="./index.php?acao=alterar&codigo=<?= $linha['codigo'] ?>">Alterar</a>
                        </td>
                        <td>
                            <a  class="btn btn-danger" href="./index.php?acao=deletar&codigo=<?= $linha['codigo'] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>