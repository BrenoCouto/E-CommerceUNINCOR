<!DOCTYPE html>
<html>

<head>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="sweetalert2.all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  
</head>
<body>

<?php
session_start();
$nome_usuario = "";
$email    = "";
$senha = "";
$errors = array(); 



$db = mysqli_connect('localhost', 'root', '', 'ecommerce');


if (isset($_POST['reg_user'])) {
  
  $nome_usuario = mysqli_real_escape_string($db, $_POST['nome_usuario']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $senha_1 = mysqli_real_escape_string($db, $_POST['senha_1']);
  $senha_2 = mysqli_real_escape_string($db, $_POST['senha_2']);
  $telefone = mysqli_real_escape_string($db, $_POST['telefone']);

  if (empty($nome_usuario)) { array_push($errors, "Nome de Usuário é requerido"); }
  if (empty($email)) { array_push($errors, "Email é requerido"); }
  if (empty($senha_1)) { array_push($errors, "Senha é requerida"); }
  if ($senha_1 != $senha_2) {
  array_push($errors, "As senhas não se combinam");
  }

  $user_check_query = "SELECT * FROM usuario WHERE nome='$nome_usuario' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['nome'] === $nome_usuario) {
      array_push($errors, "Usuário já existe");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email já existe");
    }
  }
  if (count($errors) == 0) {
    $senha = password_hash($senha_1, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuario (nome, email, senha, telefone) 
          VALUES('$nome_usuario', '$email', '$senha','$telefone')";
    mysqli_query($db, $query);
    $_SESSION['nome_usuario'] = $nome_usuario;
    $_SESSION['success'] = "Seja bem vindo";
    header('location: dashboard.php');
  }

    $sql_telefone = mysqli_query($db,"SELECT telefone FROM usuario WHERE nome = '$nome_usuario' ");
    $row_telefone = mysqli_fetch_array($sql_telefone);
    $numero_banco = $row_telefone['telefone'];
    $_SESSION['telefone_session'] = $numero_banco;

    $sql_email = mysqli_query($db,"SELECT email FROM usuario WHERE nome = '$nome_usuario' ");
    $row_email = mysqli_fetch_array($sql_email);
    $email_banco = $row_email['email'];
    $_SESSION['email_session'] = $email_banco;
}


 if (isset($_POST['login_user'])) {
  $nome_usuario = mysqli_real_escape_string($db, $_POST['nome_usuario']);
  $senha = (mysqli_real_escape_string($db, $_POST['senha']));
  $row_email = " ";
  $row_telefone = " ";
  $row_usuario = " ";
  $email_banco = " ";
  $numero_banco = " ";

  

  if (empty($nome_usuario)) {
    array_push($errors, "Nome de Usuário é requerido");
  }
  if (empty($senha)) {
    array_push($errors, "Senha é requerida");
  }

  if (count($errors) == 0) {
    $query = "SELECT * FROM usuario WHERE nome='$nome_usuario' LIMIT 1";

    $sql_telefone = mysqli_query($db,"SELECT telefone FROM usuario WHERE nome = '$nome_usuario' ");
    $row_telefone = mysqli_fetch_array($sql_telefone);
    $numero_banco = $row_telefone['telefone'];
    $_SESSION['telefone_session'] = $numero_banco;

    $sql_email = mysqli_query($db,"SELECT email FROM usuario WHERE nome = '$nome_usuario' ");
    $row_email = mysqli_fetch_array($sql_email);
    $email_banco = $row_email['email'];
    $_SESSION['email_session'] = $email_banco;

    $result = mysqli_query($db, $query);
    if ($result) {
      $row_usuario = mysqli_fetch_assoc($result);
    }
    if (password_verify($senha, $row_usuario['senha'])) {
      $_SESSION['nome_usuario'] = $nome_usuario;
      $_SESSION['success'] = "Seja bem vindo";
      header('location: dashboard.php');
    }else{
      array_push($errors, "Nome de Usuário e senha estão incorretos.");
    }
   
     
  }
}

if (isset($_POST['mudar_senha'])) {

  $nome_usuario      = $_SESSION['nome_usuario'];
  $senha_nova        = mysqli_real_escape_string($db,$_POST['senha_nova']);
  $confirme_senha    = mysqli_real_escape_string($db,$_POST['confirme_senha']);
  $senha_nova_cript  = password_hash($senha_nova,PASSWORD_DEFAULT);
  $confirme_senha_cript = password_hash($confirme_senha,PASSWORD_DEFAULT);

  $sql = mysqli_query($db,"SELECT senha FROM usuario WHERE nome = '$nome_usuario' ");
  $row = mysqli_fetch_array($sql);
  $senha_banco = $row['senha'];

  if($senha_nova == "" && $confirme_senha == "") {
      ?>
      <script>  
      Swal.fire({
                title: 'Erro!',
                text: 'As senhas não podem ser vazias',
                icon: 'error',
                confirmButtonText: 'Confirmar'
              })  
      </script>
      <?php
  } else if($senha_nova != $confirme_senha){
    ?>
    <script>  
    Swal.fire({
              title: 'Erro!',
              text: 'As senhas não são correspondentes',
              icon: 'error',
              confirmButtonText: 'Confirmar'
            })  
    </script>
    <?php
  }
       else {
        $query = ("UPDATE usuario SET senha = '$confirme_senha_cript' WHERE nome = '$nome_usuario' ");
        $result = mysqli_query($db,$query);
          if ($result) {
            ?>
            <script> Swal.fire({
              title: 'Sucesso!',
              text: 'Senha alterada com sucesso',
              icon: 'success',
              confirmButtonText: 'Confirmar'
            }) 
            </script> 
            <?php
          }
      }
  }



  if (isset($_POST['mudar_telefone'])) {

    $nome_usuario      = $_SESSION['nome_usuario'];
    $novo_telefone     = mysqli_real_escape_string($db,$_POST['novo_telefone']);
    
  
      $query = ("UPDATE usuario SET telefone = '$novo_telefone' WHERE nome = '$nome_usuario' ");
          $result = mysqli_query($db,$query);
            if ($result) { ?>
              <script> 
              Swal.fire({
                title: 'Sucesso!',
                text: 'Número de Telefone alterado com sucesso',
                icon: 'success',
                confirmButtonText: 'Confirmar'
              })
               </script>
               <?php
            }else{ ?>
              <script> 
              Swal.fire({
                title: 'Erro!',
                text: 'Erro ao alterar número de usuário',
                icon: 'error',
                confirmButtonText: 'Confirmar'
              }) 
              </script>
              <?php
            }
            $sql = mysqli_query($db,"SELECT telefone FROM usuario WHERE nome = '$nome_usuario' ");
            $row = mysqli_fetch_array($sql);
            $numero_banco = $row['telefone'];
            $_SESSION['telefone_session'] = $numero_banco; 
  }




  if (isset($_POST['efetuar_pagamento'])) {

    $nome_usuario      = $_SESSION['nome_usuario'];
    $novo_email     = mysqli_real_escape_string($db,$_POST['novo_email']);
    
  
    if($novo_email == "" ) {
      ?>
      <script>  
      Swal.fire({
                title: 'Erro!',
                text: 'O E-mail não pode ser vazio',
                icon: 'error',
                confirmButtonText: 'Confirmar'
              })  
      </script>
      <?php
  }
       else {
        $query = ("UPDATE usuario SET email = '$novo_email' WHERE nome = '$nome_usuario' ");
        $result = mysqli_query($db,$query);
          if ($result) {
            ?>
            <script> Swal.fire({
              title: 'Sucesso!',
              text: 'E-mail alterado com sucesso',
              icon: 'success',
              confirmButtonText: 'Confirmar'
            }) 
            </script> 
            <?php
          }
      }
            $sql = mysqli_query($db,"SELECT email FROM usuario WHERE nome = '$nome_usuario' ");
            $row = mysqli_fetch_array($sql);
            $numero_banco = $row['email'];
            $_SESSION['email_session'] = $numero_banco; 
  }

  if (isset($_POST['efetuar_pagamento'])) {
  
    $nome_usuario = mysqli_real_escape_string($db, $_POST['nome_usuario']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $senha_1 = mysqli_real_escape_string($db, $_POST['senha_1']);
    $senha_2 = mysqli_real_escape_string($db, $_POST['senha_2']);
    $telefone = mysqli_real_escape_string($db, $_POST['telefone']);
  
    
    if (empty($nome_usuario)) { array_push($errors, "Nome de Usuário é requerido"); }
    if (empty($email)) { array_push($errors, "Email é requerido"); }
    if (empty($senha_1)) { array_push($errors, "Senha é requerida"); }
    if ($senha_1 != $senha_2) {
    array_push($errors, "As senhas não se combinam");
    }
  
    $user_check_query = "SELECT * FROM usuario WHERE nome='$nome_usuario' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { 
      if ($user['nome'] === $nome_usuario) {
        array_push($errors, "Usuário já existe");
      }
  
      if ($user['email'] === $email) {
        array_push($errors, "Email já existe");
      }
    }
    if (count($errors) == 0) {
      $senha = password_hash($senha_1, PASSWORD_DEFAULT);
  
      $query = "INSERT INTO usuario (nome, email, senha, telefone) 
            VALUES('$nome_usuario', '$email', '$senha','$telefone')";
      mysqli_query($db, $query);
      $_SESSION['nome_usuario'] = $nome_usuario;
      $_SESSION['success'] = "Seja bem vindo";
      header('location: dashboard.php');
    }
  }

?>