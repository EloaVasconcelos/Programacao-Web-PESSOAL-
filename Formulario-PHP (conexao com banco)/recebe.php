<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe</title>
</head>
<body>
    <?php
    include 'conexao.php';
    $nome = $_POST["txtNome"];
    $senha = $_POST["txtSenha"];
    $sexo = $_POST["rdbSexo"];
    $estado = $_POST["sltestado"];

    //echo "Nome do Cliente: {$nome} <br>";
    //echo "Senha: {$senha} <br>";
    //echo "Sexo: {$sexo} <br>";
    //echo "Estado: {$estado} <br>";

    $incluir = $cn->query("insert into tbcliente(Nome, Senha, Sexo, Estado) values('$nome','$senha','$sexo','$estado')");
        header('location:ok.html');
    
    ?>
</body>
</html>