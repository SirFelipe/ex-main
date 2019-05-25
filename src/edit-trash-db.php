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
    <title>ex - Editando lixo cadastrado</title>
</head>
    <body>
        <div >
            <div class="uk-card uk-card-primary uk-card-body">
                <h3 class="uk-card-title">ex - Editar lixo</h3>
                <p>Edite o seu ex lixo!</p>
            </div>
            <?php 
                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $tipo = $_POST['tipo'];
                $quantidade = $_POST['quantidade'];

                if (atualizarLixo($connection, $id, $nome, $tipo, $quantidade)) {
                    ?>
                    <script>
                        UIkit.notification({
                        message: 'Lixo alterado com sucesso',
                        status: 'success',
                        pos: 'bottom-center',
                        timeout: 5000
                    });
                    </script>
                    <div class="uk-alert-success" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p>Lixo alterado com nome <?= $nome ?> e tipo <?= $tipo ?></p>
                    </div>
                    <?php
                } else {
                    ?>
                    <script>
                        UIkit.notification({
                        message: 'Lixo não foi alterado',
                        status: 'danger',
                        pos: 'bottom-center',
                        timeout: 5000
                    });
                    </script>
                    <?php
                }
            ?>

        <a href="home-user.php"><button class="uk-button uk-button-secondary uk-align-center">Voltar</button></a>
        </div>
    
    </body>
</html>