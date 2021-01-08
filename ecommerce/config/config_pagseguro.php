<?php /* -------------- API DO PAGSEGURO --------------*/
define("URL" , "https://localhost/ecommerce");

/* SETTAR SANBOX PARA FALSO QUANDO ENVIAR AO SERVIDOR OFICIAL
   SANDBOX VERSÃO DE DESENVOLVIMENTO, APENAS TESTES
*/
$sandbox = true;

if($sandbox){
  define("EMAIL_PAGSEGURO", "brenoac3@gmail.com");
  define("TOKEN_PAGSEGURO" , "3EE1AE5B7A7B488EBCE6AD55DE035766");
  define ("URL_PAGSEGURO", "https://ws.sandbox.pagseguro.uol.com.br/v2/");
  define ("SCRIPT_PAGSEGURO" , " https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
}else{
  define("EMAIL_PAGSEGURO", "brenoac3@gmail.com");
  define("TOKEN_PAGSEGURO" , "eda44872-ee8c-46eb-bd8f-3f41ddb5600412f8d14740c393c0f5eb4ed11416e65d53d9-a56c-4da0-aa3c-70051f90ff0f");
  define ("URL_PAGSEGURO", "https://ws.pagseguro.uol.com.br/v2/");
  define ("SCRIPT_PAGSEGURO" , "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
}

/* --------------------------------------------------------------------------------------------- */
?>