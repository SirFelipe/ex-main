<?php include 'db/functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro no EX</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="../assets/css/estilo.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="../assets/css/login_estilo.css">
</head>
<!-- CADASTRO -->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<a href="home-user.php"><img src="../assets/img/logo_ex.jpg" class="brand_logo" alt="Logo"></a>
					</div>
				</div>
        <div class="mt-4">
          <div class="d-flex justify-content-center form_container">
            <h5><strong>Atualizar perfil</strong></h5>
          </div>
        </div>
				<div class="d-flex justify-content-center form_container">
					<?php if (isset($_POST['update_user'])){ atualizaUsuario(); } ?>
					<form id="atualizar_form" action="" method="post">
						<?php include 'errors.php'; ?>
            <!-- nm_USUARIO -->
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="<?php echo $_SESSION['username']; ?>" placeholder="Nome de usuário" required>
						</div>
            <!-- email -->
            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-at"></i></span>
              </div>
              <input type="email" name="email" class="form-control input_email" value="<?php echo $_SESSION['email']; ?>" placeholder="Digite seu email" required>
            </div>
            <!-- pw_senha -->
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="Digite sua senha atual" required>
						</div>
            <!-- nova senha -->
            <div class="input-group mb-2">
              <input type="password" name="new-pw" class="form-control input_pass" value="" placeholder="Digite sua nova senha" required>
            </div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button id="update_btn" type="submit" name="update_user" class="btn login_btn">Atualizar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
