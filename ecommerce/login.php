<?php include('config/server.php');?>
<!DOCTYPE html>
<html>
<head>
  <title>E-Commerce do MDFS</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!--  
  <div class="header">
    <h2>Login</h2>
  </div>

  <form method="post" action="login.php">
    <?php include('config/errors.php'); ?>
    <div class="input-group">
      <label>Nome de Usuário</label>
      <input type="text" name="nome_usuario">
    </div>
    <div class="input-group">
      <label>Senha do Usuário</label>
      <input type="password" name="senha">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
      Não tem sua conta ainda? <a href="registrar.php">Registrar</a>
    </p>
  </form>

--->

<div style="padding-top: 60px;">
<form method="post" action="login.php" class="w3-container w3-card w3-light-grey w3-text-teal w3-border w3-round w3-mobile w3-content">
<h2 class="w3-center">Login</h2>
 <?php include ('config/errors.php'); ?>
<div class="w3-row w3-section">
  <div class="w3-col " style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border " name="nome_usuario" type="text" placeholder="Nome do Usuário">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="senha" type="password" placeholder="Senha do Usuário">
    </div>
</div>

<button class="w3-button w3-block w3-section w3-teal w3-ripple w3-padding" name="login_user">Login</button>
    <p >
      Não tem sua conta ainda? <a href="registrar.php" >Registrar</a>
    </p>
    <p style="padding-top:1px; padding-bottom:2px;" >
       <a href="index.php" >Sair</a>
    </p>
</form>
</div>


</body>
</html>