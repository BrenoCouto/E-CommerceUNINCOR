<?php 
  include'config/server.php';
  include 'config/pagamento.php';
  
?>
<!DOCTYPE html>
<html>

<head>
  <title>MDFS - Cursos Online</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script href="js/config.js"></script>

  <script type="text/javascript" src= "<?php echo SCRIPT_PAGSEGURO?>" ></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none " id="leftMenu">
  <button onclick="fecharMenuEsquerda()" class="w3-bar-item w3-button w3-large">Fechar &times;</button>
  <a class="w3-bar-item w3-button" href="dashboard.php">Home</a>
  <a href="#news" class="w3-bar-item w3-button">Meus Cursos</a>
  <a href="perfil.php" class="w3-bar-item w3-button">Meu Perfil</a>
  <a href="cursos_graduacao.php" class="w3-bar-item w3-button">Cursos de Graduação</a>
  <a href="cursos_posgraduacao.php" class="w3-bar-item w3-button">Cursos de Pós-Graduação</a>
  <a href="cursos_extensao.php" class="w3-bar-item w3-button">Cursos de Extensão</a>
  <a href="cursos_livres.php" class="w3-bar-item w3-button">Cursos Livres</a>
  <a href="login.php?logout='1'" onclick="DestroySession();" style="color: black; background-color: red" class="w3-bar-item w3-button">SAIR</a>
  
</div>

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-left" onclick="abrirMenuEsquerda()">&#9776;</button>
  <button class="w3-button w3-teal w3-xlarge w3-right">
    <?php  if (isset($_SESSION['nome_usuario'])) : ?>
      <p style="font-size:19px;">Bem vindo(a) <strong><?php echo $_SESSION['nome_usuario']; ?></strong></p>  
    <?php endif ?>
  </button>
  
  <a href="checkout.php">
  <button class="w3-button w3-teal w3-xlarge w3-right">
      <p style="font-size:19px;">Carrinho<i class="fa fa-shopping-cart"></i></p>
  </button>
  </a>
  
<div class="w3-overlay" onclick="fecharMenuEsquerda()" style="cursor:pointer"></div>
  <div class="w3-container">
    <h1 class="titulo">MDFS - Cursos digitais</h1>
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