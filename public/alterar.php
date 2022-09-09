<?php 
include 'conection.php';

$id = $_GET['id'];

$cliente = $pdo -> querry("select * from pessoa where id = ?", $id)
-> fetch()



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de cadastro</title>
</head>
<body>
    
</body>
</html>