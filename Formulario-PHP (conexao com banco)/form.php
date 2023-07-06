<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="b2">

<! -- Criando o forms -- >
    <div class ="global"> 
        <form name="FrmCad" method="post" action="recebe.php">
            <label> Nome: <input type="text" name="txtNome"/></label><br></br>
            <label> Senha: <input type="password" name="txtsenha"/></label><br></br>

            <p>Sexo:
            <input type="radio" name="rdbSexo" value="M"/><label>Masculino</label>

            <input type="radio" name="rdbSexo" value="F"/><label>Feminino</label>
            </p>

            <p> Estado:
            <select name="sltestado"> 
                <option value="">  </option>
                <option name="SP">SP</option>
                <option name="RJ">RJ</option>
                <option name="MG">MG</option>
                <option name="ES">ES</option>
            </select><br></br>
        </p> 
            <button class="enviar" type="submit" name="Enviar"> Enviar </button>
        </form>
    </div>
</body>
</html>