<?php include 'db.php'; ?>

<?php

function insereUsuario($connection, $user, $password) {
    $query = "INSERT INTO users(user, password) VALUES ('{$user}','{$password}')";
    return mysqli_query($connection, $query);
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

function atualizarProduto($connection, $id, $nome, $preco) {
    $query = "UPDATE produtos SET nome = '{$nome}' ,preco = {$preco} WHERE id = {$id}";
    return mysqli_query($connection, $query);
}

function listarProdutosPorId($connection, $id) {
    $query = "SELECT nome, preco FROM produtos WHERE ID = {$id}";
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

    echo '<tr>';
    echo '<td>'. $nome .'</td>';
    echo '<td>'. $tipo .'</td>';
    echo '<td>'. $quantidade .'</td>';
    echo '</tr>';
  }

}

?>
