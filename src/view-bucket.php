<?php include 'db/functions.php'; ?>
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
            <h3 class="uk-card-title">ex - Cesta de lixo</h3>
            <p>Cesta de <?php echo $_SESSION['username']; ?></p>
        </div>

        <div class="uk-container uk-margin-top">
          <legend class="uk-legend">Cesta!</legend>
          <table class="uk-table uk-table-divider">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Quantidade</th>
              </tr>
            </thead>
            <tbody>
              <?php mostrarDadosCesta(); ?>
            </tbody>
          </table>
          <div class="uk-align-center">
              <a href="home-user.php"><button class="uk-button uk-button-secondary uk-align-center">Voltar</button></a>                </div>
          </div>
    </main>
</body>
</html>
