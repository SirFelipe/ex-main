<!-- DATABASE IMPORT-->
<?php include 'db.php'; ?>
<!-- INICIANDO A SESSÃO -->
<?php
	if(!isset($_SESSION)){session_start();}
?>

<?php
	$errors = array();

  // LOGIN USER
  if (isset($_POST['login'])) {
    global $connection;

    //DECLARAÇÃO DE VÁRIAVEIS
    $email1    = $_POST['email'];
    $password1 = $_POST['password'];

    //TRATAMENTO SQL INJECTION
    $email = mysqli_real_escape_string($connection, $email1);
    $password = mysqli_real_escape_string($connection, $password1);
		$password = md5($password);
    //VALIDAÇÃO
    if (empty($username)) {array_push($errors, "Digite um email");}
    if (empty($password)) {array_push($errors, "Digite uma senha");}

    $query = "SELECT * FROM users";
    $select_user = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_user)){
      $db_user = $row['username'];
      $db_email = $row['email'];
      $db_pw = $row['password'];
    }

    if($email !== $db_email && $password !== $db_pw){
      array_push($errors, "Email ou senha inválidos");
    }elseif(count($errors) == 0){
			//$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			//$results = mysqli_query($connection,$query);
			$_SESSION['email'] = $db_email;
			$_SESSION['password'] = $db_pw;
			$_SESSION['username'] = $db_user;
			header('location: src/home-user.php');
		}
	}

?>
