<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/uikit.min.css">
    <script src="../assets/js/uikit.min.js"></script>
    <title>ex - Gestão da cesta</title>
</head>
<body>
    <main>
        <div>
            <div class="uk-card uk-card-primary uk-card-body">
                <h3 class="uk-card-title">ex - Cadastro de lixo</h3>
                <p>cadastre aqui e deixe o ex cuidar do seu lixo</p>
            </div>
            <form action="add-db-trash.php" method="post" class="uk-margin-top">
                <legend class="uk-legend uk-text-center">Nome:</legend>
                <input type="text" name="nome" id="" class="uk-input uk-form-width-medium uk-align-center" placeholder="exemplo: garrafa pet">
                <legend class="uk-legend uk-text-center uk-margin-bottom">Tipo:</legend>
                <div class="uk-grid-medium uk-child-width-expand@s uk-text-center uk-margin-bottom">
                    <label>
                        <input class="uk-radio" type="radio" name="tipo" value="plastico"> Plastico
                    </label>
                    <label>
                        <input class="uk-radio" type="radio" name="tipo" value="metal"> Metal
                    </label>
                    <label>
                        <input class="uk-radio" type="radio" name="tipo" value="papel"> Papel
                    </label>
                    <label>
                        <input class="uk-radio" type="radio" name="tipo" value="organico"> Organico
                    </label>
                </div>
                <legend class="uk-legend uk-text-center">Quantidade:</legend>
                <input type="number" name="quantidade" id="" class="uk-input uk-form-width-medium uk-align-center" placeholder="exemplo: 99">
                <button type="submit" name="enviar" class="uk-button uk-button-primary uk-align-center">Cadastrar</button>
            </form>
        </div>
    </main>
</body>
</html>