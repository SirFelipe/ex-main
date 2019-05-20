<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/css/uikit.min.css">
    <script src="styles/js/uikit.min.js"></script>
    <script src="styles/js/uikit-icons.min.js"></script>
    <title>ex - Seu lixo no lugar</title>
</head>
<body class="uk-container-expand">
    <!-- Header -->
    <div>
        <div class="uk-card uk-card-primary uk-card-hover uk-card-body ">
            <h3 class="uk-card-title">ex - onde deve estar o lixo!</h3>
            <p>O lixo precisa de um fim, o ex é o fim para o seu lixo</p>
        </div>
        <nav class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li><a href="./src/index.php">home</a></li>
                    <li><a href="./src/login.php">login</a></li>
                    <li><a href="./src/about.php">about</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <form action="login-granted.php" method="post">
        <div class="uk-align-center">
            <legend class="uk-legend uk-text-center">Usuário</legend>
            <input type="text" name="user" id="user" placeholder="yuribreion" class="uk-input uk-form-width-medium uk-form-large uk-align-center">
            <legend class="uk-legend uk-text-center">Chave</legend>
            <input type="password" name="password" id="password" placeholder="segredo!" class="uk-input uk-form-width-medium uk-form-large uk-align-center">
            <button type="submit" class="uk-button uk-button-primary uk-align-center">Vamos lá</button>
        </div>
    </form>
    

    <!-- Footer -->
    <div>
        <div class="uk-card uk-card-secondary uk-card-body">
            <p>ex™ - Uma empresa cheia de ❤ por SP </p>
        </div>
    </div>
</body>
</html>