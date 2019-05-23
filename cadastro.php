<?php include 'src/db/register_function.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro no EX</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/estilo.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="assets/css/login_estilo.css">
</head>
<!-- CADASTRO -->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<a href="index.php"><img src="assets/img/logo_ex.jpg" class="brand_logo" alt="Logo"></a>
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form id="register_form" action="cadastro.php" method="post">
						<?php include 'src/errors.php'; ?>
            <!-- nm_USUARIO -->
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="" placeholder="Digite seu nome de usuário" required>
						</div>
            <!-- ds_email -->
            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-at"></i></span>
              </div>
              <input type="email" name="email" class="form-control input_email" value="" placeholder="Digite seu email" required>
            </div>
            <!-- pw_senha -->
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="Digite sua senha" required>
						</div>
            <!-- confirmação senha -->
            <div class="input-group mb-2">
              <input type="password" name="password2" class="form-control input_pass" value="" placeholder="Confirme sua senha" required>
            </div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button id="reg_btn" type="submit" name="reg_user" class="btn login_btn">Registrar</button>
						</div>
					</form>
				</div>
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Já é cadastrado? <a href="login.php" class="ml-2">Faça o login</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
