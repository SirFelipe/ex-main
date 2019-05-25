<?php include 'src/db/login_function.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login no EX</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="assets/css/login_estilo.css">
	<link rel="stylesheet" href="assets/css/estilo.css">
</head>
<!-- LOGIN -->
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
					<form action="" method="post">
						<?php include 'src/errors.php'; ?>
						<!-- nm_usuario -->
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-at"></i></span>
							</div>
							<input type="text" name="email" class="form-control input_user" value="" placeholder="Digite seu email" required>
						</div>
						<!-- ds_senha -->
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="Digite sua senha" required>
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Me lembre</label>
							</div>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button type="submit" name="login" class="btn login_btn">Login</button>
						</div>
					</form>
				</div>
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Não tem uma conta? <a href="cadastro.php" class="ml-2">Cadastre-se</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Esqueceu a senha?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
