<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/uikit.min.css">
    <script src="../assets/js/uikit.min.js"></script>
    <script src="../assets/js/uikit-icons.min.js"></script>
    <title>ex - Lixo removido</title>
</head>
<body>

<?php include 'db/functions.php'; ?>

<?php
    $id = $_GET['id'];
    removerLixo($connection, $id);
?>
        <script>
            UIkit.notification({
            message: 'Lixo removido com sucesso',
            status: 'success',
            pos: 'bottom-right',
            timeout: 5000
        });
        </script>

<?php 
    header("Location: view-bucket.php?removido=true"); 
    exit();
    ?>

</body>
</html>