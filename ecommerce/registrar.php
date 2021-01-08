<?php include('config/server.php') ?>
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
    <h2>Registrar</h2>
  </div>
  
  <form method="post" action="registrar.php">
    <?php include('config/errors.php'); ?>
    <div class="input-group">
      <label>Nome do Usuário</label>
      <input type="text" name="nome_usuario" value="<?php echo $nome_usuario; ?>">
    </div>
    <div class="input-group">
      <label>Email do Usuário</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Senha do Usuário</label>
      <input type="password" name="senha_1">
    </div>
    <div class="input-group">
      <label>Confirmar Senha</label>
      <input type="password" name="senha_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Registrar</button>
    </div>
    <p>
      Já é um membro? <a href="login.php">Entrar</a>
    </p>
  </form>


-->
<script type="text/javascript">
function mask(o, f) {
  setTimeout(function() {
    var v = mphone(o.value);
    if (v != o.value) {
      o.value = v;
    }
  }, 1);
}

function mphone(v) {
  var r = v.replace(/\D/g, "");
  r = r.replace(/^0/, "");
  if (r.length > 10) {
    r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
  } else if (r.length > 5) {
    r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
  } else if (r.length > 2) {
    r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
  } else {
    r = r.replace(/^(\d*)/, "($1");
  }
  return r;
}

</script>

<div style="padding-top: 60px;">
<form method="post" action="registrar.php" class="w3-container w3-card w3-light-grey w3-text-teal w3-border w3-round w3-mobile w3-content">
<h2 class="w3-center">Registrar</h2>
 <?php include ('errors.php'); ?>
<div class="w3-row w3-section">
  <div class="w3-col " style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border " name="nome_usuario" type="text" placeholder="Nome Completo" value="<?php echo $nome_usuario; ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="email" placeholder="Insira seu E-Mail" value="<?php echo $email; ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" placeholder="Insira seu número de telefone" type="text" id="phone" name="telefone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" maxlength="15" />
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="senha_1" type="password" placeholder="Insira sua senha">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-unlock-alt"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="senha_2" type="password" placeholder="Repita sua senha">
    </div>
</div>

<button class="w3-button w3-block w3-section w3-teal w3-ripple w3-padding" name="reg_user">Registrar</button>
    <p>
      Já é um membro? <a href="login.php" >Entrar</a>
    </p>
    <p style="padding-top:1px; padding-bottom:2px;">
       <a href="index.php" >Sair</a>
    </p>

</form>
</div>





</body>


</html>