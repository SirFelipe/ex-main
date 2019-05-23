<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/uikit.min.css">
    <script src="../assets/js/uikit.min.js"></script>
    <title>ex - cadastro</title>
</head>
<body>
    <main>
        <div class="uk-card uk-card-primary uk-card-body">
            <h3 class="uk-card-title">ex - Cadastro de lixo</h3>
            <p>lixo na cesta...</p>
        </div>

        <?php

        include("./db/db.php");
        include("./db/functions.php");

        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $quantidade = $_POST['quantidade'];
        $email = $_SESSION['email'];

        if (insereLixo($connection, $nome, $tipo, $quantidade, $email)) {
                ?>

                <div class="uk-container uk-margin-top">
                <legend class="uk-legend">Sucesso!</legend>
                    <table class="uk-table uk-table-divider">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Tipo</th>
                            <th>Quantidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $nome ?></td>
                            <td><?= $tipo ?></td>
                            <td><?= $quantidade ?></td>
                        </tr>
                    </tbody>
                    </table>
                    <div class="uk-align-center">
                        <a href="home-user.php"><button class="uk-button uk-button-secondary uk-align-center">Voltar</button></a>
                    </div>
                </div>

                <?php
            } else {
                ?>

                <script>
                    UIkit.notification({
                    message: 'Erro em lixo <?= $nome ?>',
                    status: 'danger',
                    pos: 'top-center',
                    timeout: 2000
                });
                </script>

                <?php
            }

        ?>

    </main>
</body>
</html>
