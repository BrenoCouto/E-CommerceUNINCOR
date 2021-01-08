<?php 
  include'config/header.php' 
?>
<div style="padding-top:30px;">


<form method="post" action="perfil.php" class="w3-container w3-card w3-light-grey w3-text-teal w3-border w3-round w3-mobile w3-content">
<h2 class="w3-center">Informações do Usuário</h2>
<div class="w3-center">Nome do usuário: <?php echo $_SESSION['nome_usuario'] ?></div>
<div class="w3-center">Email do usuário: <?php echo $_SESSION['email_session'] ?></div>
<div class="w3-center">Telefone do usuário: <?php echo $_SESSION['telefone_session'] ?></div>
<br>
<!--
<script>
Swal.fire({
  title: 'Error!',
  text: 'Do you want to continue',
  icon: 'error',
  confirmButtonText: 'Cool'
})
  </script>
-->

  <!--<div class="w3-row w3-section">  
    <div class="w3-col " style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border " name="senha_atual" type="password" placeholder="Insira sua senha atual" >
      </div>
  </div>
  <div class="w3-row w3-section">  
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border" name="senha_nova" type="password" placeholder="Insira sua nova senha"    >
      </div>
  </div>
  <div class="w3-row w3-section">
    <p class="w3-center">
       Por fim, confirme a nova senha
      </p>
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border" name="confirme_senha" type="password" placeholder="Confirme sua senha">
      </div>
  </div>
      
  <button class="w3-button w3-block w3-section w3-teal w3-ripple w3-padding" name="mudar_senha">Alterar Senha</button>
  
  

-->
</form>
<div class="w3-container w3-center" >
  <h2>Deseja alterar sua senha?</h2>
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-teal">Alterar senha</button>

<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Mudando senha...</h2>
      </header>
      <form method="post" action="perfil.php">
  <div class="w3-row w3-section">  
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border" name="senha_nova" type="password" placeholder="Insira sua nova senha" required    >
      </div>
  </div>
  <div class="w3-row w3-section">
    <p class="w3-center">
       Por fim, confirme a nova senha
      </p>
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border" name="confirme_senha" type="password" placeholder="Confirme sua senha" required>
      </div>
  </div>
      <footer class="w3-container w3-teal">
      <button action="perfil.php" class="w3-button w3-block w3-section w3-light-grey w3-ripple w3-padding w3-border" name="mudar_senha">Alterar Senha</button>
      </footer>
    </div>
  </div>
  </form>
</div>
</div>



<div class="w3-container w3-center" >
  <h2>Deseja alterar seu número de telefone ou inserir um novo?</h2>
  <button onclick="document.getElementById('abrir_telefone').style.display='block'" class="w3-button w3-teal">Alterar ou inserir um novo número</button>

<div id="abrir_telefone" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('abrir_telefone').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Mudando número...</h2>
      </header>
      <form method="post" action="perfil.php">
  <div class="w3-row w3-section">  
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border" placeholder="Insira seu número de telefone" type="text" id="phone" name="novo_telefone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" maxlength="15" />
      </div>
  </div>
      <footer class="w3-container w3-teal">
      <button action="perfil.php" class="w3-button w3-block w3-section w3-light-grey w3-ripple w3-padding w3-border" name="mudar_telefone">Alterar Número de Telefone</button>
      </footer>
    </div>
  </div>
  </form>
</div>
</div>



<div class="w3-container w3-center" >
  <h2>Deseja alterar seu E-mail?</h2>
  <button onclick="document.getElementById('alterar_email').style.display='block'" class="w3-button w3-teal">Alterar E-mail</button>

<div id="alterar_email" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('alterar_email').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Mudando E-mail...</h2>
      </header>
      <form method="post" action="perfil.php">
  <div class="w3-row w3-section">  
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border" name="novo_email" type="email" placeholder="Insira seu novo E-mail" required>
      </div>
  </div>
      <footer class="w3-container w3-teal">
      <button action="perfil.php" class="w3-button w3-block w3-section w3-light-grey w3-ripple w3-padding w3-border" name="mudar_email">Alterar E-mail</button>
      </footer>
    </div>
  </div>
  </form>
</div>
</div>

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

<?php 
/*
      var_dump($senha_atual_cript);
      var_dump($senha_banco);
      var_dump($senha_nova_cript);
      var_dump($confirme_senha_cript);
      */
?>