<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/uikit.min.css">
    <script src="../assets/js/uikit.min.js"></script>
    <title>User - ex</title>
</head>
<body >
    <?php
        include("db/functions.php");
    ?>
    <script>
        UIkit.notification({
          message: 'Bem vindo <?= $_SESSION['username'] ?>',
          status: 'primary',
          pos: 'top-center',
          timeout: 2000
        });
    </script>
    <div>
        <div class="uk-card uk-card-primary uk-card-body">
            <h3 class="uk-card-title">ex - Gestão do usuário</h3>
            <p>Bem-vindo a gestão do usuário: <small><?php echo $_SESSION['username'] ?></small></p>
            <p>Aqui você pode gerenciar suas atividades</p>
        </div>
    </div>
    <main class="uk-container">
        <div class="uk-child-width-1-2@m uk-grid-match" uk-grid>
            <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                <a href="add-trash.php"><h3 class="uk-card-title">Cadastrar lixo</h3></a>
                <p>Aqui você pode colocar o lixo em sua cesta virtual a ser coletada</p>
            </div>
            <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                <a href="view-bucket.php"><h3 class="uk-card-title">Ver cesta</h3></a>
                <p>Aqui você pode conferir o que já esta cadastrado</p>
            </div>
        </div>
    </main>
</body>
</html>
