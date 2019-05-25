<!DOCTYPE html>
<html>
<head>
	<title>Login no EX</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="../assets/css/login_estilo.css">
	<link rel="stylesheet" href="../assets/css/estilo.css">
</head>
<!-- LOGIN -->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<a href="index.php"><img src="../assets/img/logo_ex.jpg" class="brand_logo" alt="Logo"></a>
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
          <div class="mt-4">
            <div class="justify-content-center text-center">
              <?php
                session_start();
                session_destroy();
                echo '<h5><strong>Você saiu da sessão.</strong></h5>';
                echo '<br>';
                echo '<p>Obrigado por usar nosso website.</p>';
                echo '<br>';
                echo '<a href="../index.php">Volte ao ínicio</a>';
              ?>
            </div>
          </div>

				</div>
			</div>
		</div>
	</div>
</body>
</html>
