<?php include 'db/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/uikit.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../assets/js/uikit.min.js"></script>
    <title>ex - Gestão da cesta</title>
</head>
<body>
    <?php
        $id = $_GET['id'];
        $lixo = listarLixosPorId($connection, $id);
        $nome = $lixo['nome'];
        $tipo = $lixo['tipo'];
        $quantidade = $lixo['quantidade'];

    ?>
    <main>
        <div>
            <div class="uk-card uk-card-primary uk-card-body">
                <h3 class="uk-card-title">ex - Editar lixo</h3>
                <p>Edite o seu ex lixo!</p>
            </div>
            <form action="edit-trash-db.php" method="post" class="uk-margin-top">
                <input type="text" name="id" id="" class="uk-input uk-form-width-medium uk-align-center"  hidden value="<?= $id ?>">
                <legend class="uk-legend uk-text-center">Nome:</legend>
                <input type="text" name="nome" id="" class="uk-input uk-form-width-medium uk-align-center" value="<?= $nome ?>">
                <legend class="uk-legend uk-text-center uk-margin-bottom">Tipo:</legend>
                <input type="text" name="tipo" id="" class="uk-input uk-form-width-medium uk-align-center" value="<?= $tipo ?>">
                <legend class="uk-legend uk-text-center">Quantidade:</legend>
                <input type="number" name="quantidade" id="" class="uk-input uk-form-width-medium uk-align-center" value="<?= $quantidade ?>">
                <div class="row">
                  <div class="uk-align-center">
                    <a href="home-user.php" class="btn btn-secondary">Voltar</a>
                  </div>
                </div>
                <button type="submit" name="enviar" class="uk-button uk-button-primary uk-align-center">Cadastrar</button>
            </form>
        </div>
    </main>
</body>
</html>
