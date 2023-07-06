<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

        include 'conexao.php';
    ?>

</head>


<body>
    <center>
    <h1> Localizar Cliente </h1>
    <br>

    <h4> Informe o nome do cliente </h4>
        <form name="frmpesquisa" method="get" action="busca.php">
            <input type = "text" name="txtbusca" required/>
            <input type = "submit" value="procurar"/>
        </form>


   <?php
    if(!isset($_GET["txtbusca"])){
        echo "";
    }

    else{
        $nomeCli=$_GET['txtbusca'];
        $buscaCli=$cn->query("select * from tbcliente where Nome like '%$nomeCli%'");

    
    ?>


    <table border ="1" width ="80%">
    <tr>
        <th wdth="10%"> &nbsp Código &nbsp</th>
        <th wdth="20%"> &nbsp Cliente &nbsp </th>
        <th wdth="10%">  &nbsp Senha &nbsp </th>
        <th wdth="10%">  &nbsp Sexo &nbsp </th>
        <th wdth="10%"> &nbsp Estado &nbsp </th>
        <th wdth="10%">  &nbsp Alterar &nbsp </th>
        <th wdth="10%">  &nbsp Excluir &nbsp </th>
    </tr>

    <br><br>
    
    <?php
     while ($vetor=$buscaCli-> fetch (PDO:: FETCH_ASSOC)){
   ?>  
 

 <tr>
     <td width="10%"><?php echo $vetor['Codigo']; ?> </td>
     <td width="20%"><?php echo $vetor ['Nome']; ?></td> 
     <td width="10%"><?php echo $vetor['Senha']; ?> </td>
     <td width="10%"><?php echo $vetor['Sexo']; ?> </td>
     <td width="10%"><?php echo $vetor['Estado']; ?> </td>
     <th width="10%"> alterar </th> 
     <th width="10%"> Excluir </th> 
</tr>
<?php } ?>

</table>

<?php } ?>

     </center> 
     
</body>
</html>