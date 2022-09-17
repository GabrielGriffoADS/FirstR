<?php 
include 'conection.php';


$id = (filter_input(INPUT_GET, 'id', filter_SANITIZE_ENCODED))
?

filter_input(INPUT_GET, 'id', filter_SANITIZE_ENCODED)
: false;


if ($id) (
$cliente = $pdo-> querry("select * from pessoa WHERE id =$id")    
)




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

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/inputmask.min.js"></script>
<script src="js/imputmask.extensions.min.js"></script>
<script src="js/inputmask.numeric.extensions.min.js"></script>
<script src="js/jquery.inputmask.min.js"></script>
</body>
</html>