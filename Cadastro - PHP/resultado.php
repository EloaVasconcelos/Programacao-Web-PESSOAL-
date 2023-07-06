<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
</head>
<body>
    <?php
        $usuario = filter_input (INPUT_POST, "usuario", FILTER_SANITIZE_STRING);
        echo "Nome do usuario: $usuario";
    ?>
</body>
</html>