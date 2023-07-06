<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastrar usuário</h1>

    <form method="POST" action="resultado.php">
        
        <label>Nome:</label>
        <input type="text" name="usuario" placeholder="Digite seu usuário" required/><br><br>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Digite seu email" required/><br><br>
        <label>Senha:</label>
        <input type="password" name="eenha" placeholder="Digite sua senha" required/><br><br>
        <input type="submit" value="Cadastrar" onclick="msg()"/>

    </form>
    <script src="script.js"></script>
</body>
</html>