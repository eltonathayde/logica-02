<?php
  ob_start();
  session_start();
  include('conexao/conecta.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
    <body>
        <?php
           
        ?>
        <div class="main">
            <div class="box">
                <form method="post" enctype="multipart/form-data" action="login.php" >
                <div class="campo">
                <label>Usuário</label>
                <input type='text' id="usuario" name="usuario" placeholder="Usuário">
            </div>
        </div>
            <div class="campo">
                <label>Senha</label>
                <input type='password' id="senha" name="senha" placeholder="Senha" required >
            </div>
            <div class="login">
                <input type="submit" name="login" name="login" value="Login" >
            </div> 
                </form>  

        </div>
         
        
    <script type="text/javascript " src="js/javacript.js"></script>
</body>
</html>