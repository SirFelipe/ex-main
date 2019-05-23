<?php include 'db.php'; ?>

<?php
  $errors = array();

  //REGISTRO DE USUÁRIO
  if (isset($_POST['reg_user'])) {
    global $connection;

    //DECLARAÇÃO DE VÁRIAVEIS
  	$username = $_POST['username'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];

    //TRATAMENTO SQL INJECTION
    $password_1 = mysqli_real_escape_string($connection, $password);
    $password_2 = mysqli_real_escape_string($connection, $_POST['password2']);

    //VALIDAÇÕES
    if (empty($username)) { array_push($errors, "Digite um nome de usuário "); }
    if (empty($email)) { array_push($errors, "Digite um email"); }
    if (empty($password_1)) { array_push($errors, "Digite uma senha"); }
    if ($password_1 != $password_2) {array_push($errors, "As senhas não se coincidem");}

    $sql = "SELECT * FROM users WHERE email='$email'";
    $results = mysqli_query($connection, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "exists";
      exit();
    }

    if(count($errors) == 0){
        $query = "INSERT INTO users (username, email, password)
              VALUES ('$username', '$email', '".md5($password_1)."')";
        $results = mysqli_query($connection, $query);
        echo 'Saved!';
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Você está logado agora";
        header('location: login.php');
      }
    }


?>
