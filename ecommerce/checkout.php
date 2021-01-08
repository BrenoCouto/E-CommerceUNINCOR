<?php 
  include'config/header.php' 
?>
<div style="padding-top:30px;"></div>
<style>




.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<span class="endereco" data-endereco="<?php echo URL; ?>"> </span>

<div class="container">
<h2>Seu carrinho</h2>
<p>Insira suas informações de pagamento e enfim realize o pagamento</p>
</div>
<br>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Informações de Pagamento</h3>
            <label for="fname"><i class="fa fa-user"></i> Nome completo</label>
            <input type="text" id="fname" name="firstname" value="<?php echo $_SESSION['nome_usuario'] ?>" disabled>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" value="<?php echo $_SESSION['email_session'] ?>" disabled>
            <label for="adr"><i class="fa fa-address-card-o"></i> Endereço</label>
            <input type="text" id="adr" name="address" placeholder="Ex.: Rua 123">
            <label for="city"><i class="fa fa-institution"></i> Cidade</label>
            <input type="text" id="city" name="city" placeholder="Ex.: São Paulo">

            <div class="row">
              <div class="col-50">
                <label for="state">Estado</label>
                <input type="text" id="state" name="state" placeholder="Ex.: Brasília">
              </div>
              <div class="col-50">
                <label for="zip">CEP</label>
                <input type="text" id="zip" name="zip" placeholder="Ex.:00000-000">
              </div>
            </div>
          </div>

          
          
        </div>
        <input type="submit" value="Confirmar Compra" class="btn">
      </form>
    </div>
    <div style="padding-bottom:5px;"></div>
  </div>
  
  <div class="col-25">
    <div class="container">
      <h4>Carrinho <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Produto 1</a> <span class="price">R$15,00</span></p>
      <p><a href="#">Produto 2</a> <span class="price">R$5,00</span></p>
      <p><a href="#">Produto 3</a> <span class="price">R$8,00</span></p>
      <p><a href="#">Produto 4</a> <span class="price">R$2,00</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>R$30,00</b></span></p>
    </div>
  </div>
</div>



