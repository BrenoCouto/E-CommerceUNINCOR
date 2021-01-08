<?php 
  include'config/header.php' 
?>
<div class="content" style="margin-left:11%;padding:15px 16px;" >
    <?php if (isset($_SESSION['success'])) : ?> 
    <?php endif ?>
      <?php  if (isset($_SESSION['nome_usuario'])) : ?>
        <p>Olá <strong><?php echo $_SESSION['nome_usuario']; ?></strong> o que aprenderemos hoje?</p>  
      <?php endif ?>
</div>


<div style="margin-left:10%;padding:1px 16px;">
  <h1>Todos os conteúdos serão listados por aqui</h1>
  <br>
  <h3>Encontre aqui tudo que possa te agradar</h3>
  <br>
</div>

<div class="w3-container" style="padding-bottom: 10px;">
 <div class="w3-card-2" style="width:80%; margin-left:10%;padding:1px">
    <header class="w3-container w3-light-grey">
      <h3>PARTICIPE DO CURSO DE EXTENSÃO NOVO</h3>
    </header>
      <div class="w3-container">
        <p style="padding-top: 10px;">Curso de JavaScript</p>
        <hr>
        <img src="images/javascript.png" class="w3-left w3-margin-right" style="width:60px; padding-bottom: 4px;">
        <p style="padding-top:20px;">Por apenas R$30,00</p><br>
      </div>
    <button class="w3-button w3-block w3-teal">Assinar Curso</button>
  </div>
</div>

<div class="w3-container" style="padding-bottom: 10px;">
 <div class="w3-card-2" style="width:80%; margin-left:10%;padding:1px">
    <header class="w3-container w3-light-grey">
      <h3>PARTICIPE DO CURSO DE EXTENSÃO NOVO</h3>
    </header>
      <div class="w3-container">
        <p style="padding-top: 10px;">Curso de JavaScript</p>
        <hr>
        <img src="images/javascript.png" class="w3-left w3-circle w3-margin-right" style="width:60px; padding-bottom: 4px;">
        <p style="padding-top:20px;">Por apenas R$30,00</p><br>
      </div>
    <button class="w3-button w3-block w3-teal">Assinar Curso</button>
  </div>
</div>

<div class="w3-container" style="padding-bottom: 10px;">
 <div class="w3-card-2" style="width:80%; margin-left:10%;padding:1px">
    <header class="w3-container w3-light-grey">
      <h3>PARTICIPE DO CURSO DE EXTENSÃO NOVO</h3>
    </header>
      <div class="w3-container">
        <p style="padding-top: 10px;">Curso de JavaScript</p>
        <hr>
        <img src="images/javascript.png" class="w3-left  w3-margin-right" style="width:60px; padding-bottom: 4px;">
        <p style="padding-top:20px;">Por apenas R$30,00</p><br>
      </div>
    <button class="w3-button w3-block w3-teal">Assinar Curso</button>
  </div>
</div>
</body>

<script>
function abrirMenuEsquerda() {
  document.getElementById("leftMenu").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function fecharMenuEsquerda() {
  document.getElementById("leftMenu").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}


</script>
</html>