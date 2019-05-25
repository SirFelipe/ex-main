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
    $email    = $_POST['email'];
    $password = $_POST['password'];

    //TRATAMENTO SQL INJECTION
    $email = mysqli_real_escape_string($connection, $email);
		$password = mysqli_real_escape_string($connection, $password);


    //VALIDAÇÃO
		if (empty($email)) { array_push($errors, "Digite um email "); }
    if (empty($password)) {array_push($errors, "Digite uma senha");}
		if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)){
			array_push($errors, "Digite um email valido.");
		}

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $select_usuario = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_usuario)){
			$db_id = $row['id'];
      $db_user = $row['username'];
      $db_email = $row['email'];
      $db_pw = $row['password'];

			if(count($errors) == 0){
				if($email !== $db_email && $password !== $db_pw){
					array_push($errors, "Email ou senha inválidos");
				}elseif($email == $db_email && $password !== $db_pw){
					array_push($errors, "Senha incorreta");
				}elseif($email !== $db_email && $password == $db_pw){
					array_push($errors, "Email incorreto");
				}elseif($email == $db_email && $password == $db_pw){
					$_SESSION['id'] = $db_id;
					$_SESSION['email'] = $db_email;
					$_SESSION['password'] = $db_pw;
					$_SESSION['username'] = $db_user;
					header('location: src/home-user.php');
				}else{
					array_push($errors, "Erro desconhecido, por favor insira os dados corretamente");
				}
				//$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
				//$results = mysqli_query($connection,$query);
			}
    }
}

?>
