<?php 
  include'inc/header.php';
  include'js/core.js';
  
?>
<!--div class="w3-row-padding ">


<div class="w3-center w3-margin-bottom ">
  
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="w3-teal w3-xlarge w3-padding-32">Graduação de Enfermagem</li>
    <li class="w3-padding-16"><b>25</b> Horas de Curso</li>
    <li class="w3-padding-16"><b>2</b> Matérias do Presencial</li>
    <li class="w3-padding-16"><b>10</b> Testes de Aprendizado</li>
    <li class="w3-padding-16"> Acesso <b>Vitalício</b></li>
    <li class="w3-padding-16">
      <h2 class="w3-wide">R$ 140,00</h2>
      <span class="w3-opacity">Pagamento Único</span>
    </li>
    <li class="w3-light-grey w3-padding-24">
      <button class="w3-button w3-green w3-padding-large">Contratar Curso</button>
    </li>
  </ul>
</div>



</div>
-->

<div class="w3-container w3-padding-32" style="padding-left:100px; background-color:#008578; color:white;">
  <h1>Mais sobre o curso de Odontologia</h1>
</div>

<div class="w3-row-padding" style="background-color:Lavender;">

<div class="w3-third w3-section">
<div class="w3-card-4">
<img src="images/odontologia_img.jpg" style="width:100%">
<div class="w3-container w3-white">
<h4>25 horas de Cursos</h4>
<p>Contratando esse curso, você terá mais de 25 horas de curso, com os professores mais capacitados e dedicados da Unincor.</p>
</div>
</div>
</div>

<div class="w3-third w3-section">
<div class="w3-card-4">
<img src="images/odontologia_img.jpg" style="width:100%">
<div class="w3-container w3-white">
<h4>2 Matérias do Curso Presencial</h4>
<p>Contratando esse curso você poderá completar 2 matérias que fazem parte da grade curricular do Curso presencial de Odontologia.</p>
</div>
</div>
</div>

<div class="w3-third w3-section">
<div class="w3-card-4">
<img src="images/odontologia_img.jpg" style="width:100%">
<div class="w3-container w3-white">
<h4>10 Testes de Aprendizado</h4>
<p>Você terá acesso após o aprendizado, a testes, ou seja, testaremos seus conhecimentos adquiridos nesse curso.</p>
</div>
</div>
</div>

<div class="w3-container">
  <h2>Detalhes do Curso</h2>
  <p>Informações detalhadas sobre o curso de Odontologia</p>
  <div class="w3-row">
    <a href="javascript:void(0)" onclick="openTab(event, 'Graduacao');">
      <div class="w3-third tablink w3-border-teal w3-bottombar w3-hover-light-grey w3-padding">Horas do Curso</div>
    </a>
    <a href="javascript:void(0)" onclick="openTab(event, 'Pos-Graduacao');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Matérias Presenciais</div>
    </a>
    <a href="javascript:void(0)" onclick="openTab(event, 'Extensao');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Testes Avaliativos</div>
    </a>
  </div>

  <div id="Graduacao" class="w3-container curso" style="display: block;">
    <h2>25 horas</h2>
    <p>Texto de teste Texto de teste  Texto de teste  Texto de teste  Texto de teste  Texto de teste Texto de teste Texto de teste  Texto de teste  </p>
    <p> Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste  </p>
    <p> Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste  </p>
  </div>

  <div id="Pos-Graduacao" class="w3-container curso" style="display:none">
    <h2>2 cursos da grade</h2>
    <p>Texto de teste Texto de teste  Texto de teste  Texto de teste  Texto de teste  Texto de teste Texto de teste Texto de teste  Texto de teste  </p>
    <p> Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste  </p>
    <p> Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste  </p> 
  </div>

  <div id="Extensao" class="w3-container curso" style="display:none">
    <h2>Atividades Avaliativas</h2>
    <p>Texto de teste Texto de teste  Texto de teste  Texto de teste  Texto de teste  Texto de teste Texto de teste Texto de teste  Texto de teste  </p>
    <p> Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste  </p>
    <p> Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste Texto de teste  </p>
  </div>
</div>


<script> 
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
<hr style="background-color:black;">
<div class="w3-container w3-center" style="padding-bottom:10px;" >
  <h2>Teve interesse em comprar o curso?</h2>
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-teal">Comprar Curso</button>

<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Comprando Curso...</h2>
      </header>
      <form method="post">
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
      <footer class="w3-container w3-teal">
      
      
      </footer>
    </div>
    
  </div>
  </form>
</div>
</div>


</div>
<span class="endereco" data-endereco="<?php echo URL; ?>"> </span>
<button onclick="pagamento();" class="w3-button w3-block w3-section w3-light-grey w3-ripple w3-padding w3-border">Confirmar Compra</button>
<button onclick="pagamento();"> PAGAR</button>
</body>
</html> 