<?php

$id = $_GET['id'];

    //Redirecionar para atualizar de produtos
    header("Location: edit-trash-form.php?id=$id"); 
    exit();
?>