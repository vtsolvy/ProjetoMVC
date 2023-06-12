<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <div class="container box mt-5">
        <h2>Cadastro de Clientes</h2>
        <form method="POST" class="mt-4">
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" name="codigo" id="codigo" class="form-control">
            </div>
            <div class="form-group mt-3">
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" id="nome" class="form-control" required>
            </div>

            <div class="form-group mt-3">
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group mt-3">
            <label for="telefone">Telefone:</label><br>
            <input type="text" name="telefone" id="telefone" class="form-control" required>
            </div>
            
            <div class="botaodireita mt-3">
                <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-primary btn-sm">
                <input type="button" onclick="location.href='index.php'"value="Voltar" class=" btn btn-sm btn-success">
            </div>
        </form>
    </div>
</body>

</html>