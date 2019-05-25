<?php
  $db['db_host'] = "localhost";
  $db['db_user'] = "root";
  $db['db_pass'] = "";
  $db['db_name'] = "lixei";

  //$connection = mysqli_connect('localhost','root','','ex');

  foreach($db as $key => $value){
    define(strtoupper($key), $value);
  }

  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  if(!$connection){
    echo "Erro ao se conectar ao banco de dados";
  }

  if(!isset($_SESSION)){
    session_start();
  }
?>
