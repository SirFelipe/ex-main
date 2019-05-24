<?php
  session_start();
  session_destroy();
  echo 'Você saiu da sessão. <a href="../index.php">Volte ao ínicio</a>';
?>
