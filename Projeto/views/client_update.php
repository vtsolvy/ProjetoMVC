<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cliente</title>
</head>
<body>
    <div class="container box mt-5">
        <h2>Alterar Cadastro</h2>
        <form method="POST">
            <div class="form-group mt-3">
                <label for="nome">Nome:</label><br>
                <input type="text" name="nome" id="nome" value="<?= $cli['nome'] ?>" required>
            </div>

            <div class="form-group mt-3">
                <label for="email">E-mail:</label><br>
                <input type="email" name="email" id="email" value="<?= $cli['email'] ?>">
            </div>

            <div class="form-group mt-3">
                <label for="telefone">Telefone:</label><br>
                <input type="text" name="telefone" id="telefone" value="<?= $cli['telefone'] ?>">
            </div>

            <div class="botaodireita mt-3">
                <input type="submit" name="alterar" value="Alterar" class="btn btn-primary btn-sm">
                <input type="button" onclick="location.href='index.php'" value="Voltar" class=" btn btn-sm btn-success">
            </div>
        </form>
    </div>
</body>
</html>