<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./CSS/criarconta.css">
    <link rel="icon" type="image/x-icon" href="./img/Icon/netflix.png">
    <title>Registra-se</title>
</head>
<body>
   
<div class="container">
<div class="logo">
    <a href="login.php"><img src="https://i.ibb.co/r5krrdz/logo.png"></a>
</div>
<form method="POST" action="processoRegistro.php">
<h1>Criar conta</h1>


<input class="input" type="email" name="email-registrado" placeholder="Insira seu email" id="">

<input class="input" type="password" name="senha-registrada" placeholder="Insira sua senha" id="">

<input class="button" type="submit" name="criarConta" value="Criar conta">
</form>

</div>


</body>
</html>