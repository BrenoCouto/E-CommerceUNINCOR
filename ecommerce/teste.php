<?php
include 'config/header.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>TESTANDO</title>
    </head>
    <body>
        
        <button onclick="pagamento();">Pagar</button>
        <span class="endereco" data-endereco="<?php echo URL; ?>"></span>
        <?php echo $url ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo SCRIPT_PAGSEGURO; ?>"></script>
        <script src="js/config.js"></script>

        <div class="CartaoCredito"></div>
        <div class="Boleto"></div>
        <div class="Debito"></div>
        

    </body>
</html>