<?php 
  include'config/server.php'; 
?>
<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>


<body>

<div class="w3-teal">
  <a href="login.php">
  <button class="w3-button w3-teal w3-xlarge w3-right  w3-bar-item" >
   <p>Login</p>
  </button>
  </a>

<a href="registrar.php">
  <button class="w3-button w3-teal w3-xlarge w3-right w3-bar-item" href="registrar.php">
   Criar Conta
  </button>
</a>
  <div class="w3-container">
    <h1 class="titulo">MDFS - Cursos digitais</h1>
  </div>
<div style="margin: 3px; padding-bottom: 3px;" >
  <h2>Procurar por cursos</h2>
  <p>Verifique se o seu curso desejado existe aqui</p>
  <input class="w3-input w3-border w3-padding w3-round" style="color: black" type="text" placeholder="Procurar Cursos..." id="myInput" onkeyup="myFunction()">
</div>  

</div>
     



<div class="w3-content w3-display-container w3-mobile" style="width: 1200px; height: 500px;">
  <img class="mySlides" src="images/enfermagem-teste1.jpg" style="width: 100%; height: 100%;">
  <img class="mySlides" src="images/csharp_slideshow.png" style="width: 100%; height: 100%;">
  <img class="mySlides" src="images/JavaScript_slide.jpg" style="width: 100%; height: 100%;">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>
<br>


<div class="w3-row-padding"  id="myTable">
  <div class="w3-quarter">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
  <div class="w3-half">        
  <p><strong>On a large screen the content will be displayed as a 3-column layout. On a small screen the content will adjust itself into a single-column. Resize the browser window to see the effect.</strong></p>
  </div>
  <div class="w3-quarter">        
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
</div>

<div class="w3-container">
  <h2>Cursos Disponíveis</h2>
  <p>Temos uma grande variedade de escolhas para todos os públicos</p>
  <div class="w3-row">
    <a href="javascript:void(0)" onclick="openTab(event, 'Graduacao');">
      <div class="w3-third tablink w3-border-teal w3-bottombar w3-hover-light-grey w3-padding">Cursos de Graduação</div>
    </a>
    <a href="javascript:void(0)" onclick="openTab(event, 'Pos-Graduacao');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Cursos de Pós-Graduação</div>
    </a>
    <a href="javascript:void(0)" onclick="openTab(event, 'Extensao');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Cursos de Extensão</div>
    </a>
  </div>

  <div id="Graduacao" class="w3-container curso" style="display: block;">
    <h2>Graduação</h2>
    <p>Você pode encontrar aulas de cursos que fazem parte da sua graduação aqui na nossa plataforma</p>
  </div>

  <div id="Pos-Graduacao" class="w3-container curso" style="display:none">
    <h2>Pós-Graduação</h2>
    <p>Já é graduado e tem interesse em realizar Pós-Graduação pela nossa plataforma?
       É por aqui mesmo 
    </p> 
  </div>

  <div id="Extensao" class="w3-container curso" style="display:none">
    <h2>Extensão</h2>
    <p>Tem interesse em realizar algum curso avulso que não depende de graduação e Etc.? Temos várias opções pra você!</p>
  </div>
</div>

<script> 
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

/* SCRIPT DO SLIDESHOW */
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}

/* Função do TAB de cursos */
function openTab(evt, nomeCurso) {
  var i, x, tablinks;
  x = document.getElementsByClassName("curso");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-border-teal", "");
  }
  document.getElementById(nomeCurso).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-teal";
}

</script>





</body>
</html>