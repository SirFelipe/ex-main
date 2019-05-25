<?php include 'db.php'; ?>

<?php
  $errors = array();
  function insereUsuario($connection, $user, $password) {
      $query = "INSERT INTO users(user, password) VALUES ('{$user}','{$password}')";
      return mysqli_query($connection, $query);
  }


  function removeUsuario(){
    global $connection;

    //ARRAY PARA errors
    $errors = array();
    $id = $_SESSION['id'];

    $query = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);

    header('location: logout.php');
  }

function atualizaUsuario(){
    global $connection;

    //ARRAY PARA ERROS
    $errors = array();

    //DECLARAÇÃO DE VÁRIAVEIS
    $id = $_SESSION['id'];
    $username_novo = $_POST['username'];
    $email_novo = $_POST['email'];
    $email_antigo = $_SESSION['email'];
    $old_password = $_POST['password'];
    $new_password = $_POST['new-pw'];

    //TRATAMENTO SQL INJECTION
    $password_old = mysqli_real_escape_string($connection, $old_password);
    $password_new = mysqli_real_escape_string($connection, $new_password);
    $email_novo = mysqli_real_escape_string($connection, $email_novo);

    //VALIDAÇÃO SE O EMAIL JÁ EXISTE
    $query = "SELECT * FROM users WHERE email = '$email_novo'";
    $results = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($results)){
          $db_id = $row['id'];
          $db_user = $row['username'];
          $db_email = $row['email'];
          $db_pw = $row['password'];
    }


    //VALIDAÇÕES
    /*$queryEmail = "SELECT email FROM users";
    $resultado = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($resultado)){
      if ($email_antigo){
        array_push($errors, "Email já existente");
      }
    }*/

    if (empty($username_novo)) { array_push($errors, "Digite um nome de usuário "); }
    if (empty($email_novo)) { array_push($errors, "Digite um email"); }
    if (empty($password_old)) { array_push($errors, "Digite uma senha"); }
    if ($password_old !== $db_pw) {
      array_push($errors, "As senhas não se coincidem");
    }

    if(count($errors) == 0){
      $update = "UPDATE users SET username = '$username_novo',
                email = '$email_novo',
                password = '$password_new'
                WHERE id = $id";

                $resultado = mysqli_query($connection, $update);

      $_SESSION['username'] = $username_novo;
      $_SESSION['email'] = $email_novo;
      $_SESSION['password'] = $password_new;
      header('location: home-user.php');
    }else{
      echo "Erro desconhecido, por favor tente novamente.";
      exit();
    }
}

function mostrarDadosUsuario($email, $password){
  global $connection;

  $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
  $select = mysqli_query($connection, $query);
  while ($row = mysqli_fetch_assoc($select)) {
    $username = $row['username'];
    $password = $row['password'];
    $email = $row['email'];
    $id = $row['id'];
  }
  //TRAZENDO OS DADOS DO USUÁRIs

  echo '<tr>';
  echo '<td>' . $id . '</td>';
  echo '<td>' . $username . '</td>';
  echo '<td>' . $email . '</td>';
  echo '<td class="text-center"><a class="glyphicon glyphicon-trash" href="remover_perfil.php?delete=' . $id . '"></a></td>';
  echo '<td class="text-center"><a class="glyphicon glyphicon-pencil" href="editar_perfil.php?edit=' .  $id . '"></a></td>';
  echo '</tr>';
}

function insereLixo($connection, $nome, $tipo, $quantidade, $user_email) {
    $query = "INSERT INTO trash(nome, tipo, quantidade,user_email) VALUES ('{$nome}','{$tipo}', {$quantidade}, '{$user_email}')";
    return mysqli_query($connection, $query);
}

function listarLixo($connection) {
    $itens = array();
    $query = "SELECT * FROM trash";
    $retorno = mysqli_query($connection, $query);
    while ($item = mysqli_fetch_assoc($retorno)) {
        array_push($itens, $item);
    }
    return $itens;
}

function removerLixo($connection, $id) {
    $query = "DELETE FROM trash WHERE id = {$id}";
    return mysqli_query($connection, $query);
}

function atualizarLixo($connection, $id, $nome, $tipo, $quantidade) {
    $query = "UPDATE trash SET nome = '{$nome}' , tipo = '{$tipo}', quantidade = '{$quantidade}' WHERE id = {$id}";
    return mysqli_query($connection, $query);
}

function listarLixosPorId($connection, $id) {
    $query = "SELECT id, nome, tipo, quantidade FROM trash WHERE id = {$id}";
    $retorno = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($retorno);
}

function mostrarDadosCesta(){
  global $connection;

  $user_email = $_SESSION['email'];
  $query = "SELECT * FROM trash WHERE user_email = '$user_email'";
  $select_trash = mysqli_query($connection,$query);

  //TRAZENDO OS DADOS DA TABELA
  while ($row = mysqli_fetch_assoc($select_trash)) {
    $nome = $row['nome'];
    $tipo = $row['tipo'];
    $quantidade = $row['quantidade'];

    ?>
      <tr>
          <td>
              <?= $row['id'] ?>
          </td>
          <td>
              <?= $row['nome'] ?>
          </td>
          <td>
              <?= $row['tipo'] ?>
          </td>
          <td>
              <?= $row['quantidade'] ?>
          </td>
          <td>
              <a href="remove-trash.php?id=<?= $row['id'] ?>" class="uk-icon-link" uk-icon="trash"></a>
          </td>
          <td>
              <a href="edit-trash.php?id=<?= $row['id'] ?>" class="uk-icon-link" uk-icon="file-edit"></a>
          </td>
      </tr>
<?php
  }

}

?>
