<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Aulaphp1</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <div class= "global">

        <form name="" method="post" action="">
            <label>Usuário:<input type="text" name="user"/></label>

            <br/><br/>
            
            <label>Senha:<input type="password" name="pass"/></label>
            <br><br>

            <input type="submit" name="submit"  value= "Logar!"/>
            </form>

                <?php
                $user=@$_REQUEST['user'];
                $pass=@$_REQUEST['pass'];
                $submit=@$_REQUEST['submit'];

                $user1='admin';
                $pass1='12345';

                $user2='user';
                $pass2='123456';


                if($submit){
                    if($user == "" || $pass == ""){
                    echo"<script:alert('Por favor, preencha todos os campos!'); </script>";
                    }

                 else{
                     if(($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2)){
                         session_start();
                         $_SESSION['usuario']=$user;
                         $_SESSION['senha']=$pass;

                         header("Location:home.php");
                        }

                         else {
                             echo"<script>alert('Usuário e/ou senha inválido (s),Tente novamente!');</script>";
                            }

                    }
                }
            ?>
                    
    </div>


    
    
</body>
</html>