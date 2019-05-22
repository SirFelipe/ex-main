<?php

function insereUsuario($connection, $user, $password) {
    $query = "INSERT INTO users(user, password) VALUES ('{$user}',{$password})";
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