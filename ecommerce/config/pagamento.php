<?php 

include 'config_pagseguro.php';

/*$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => URL_PAGSEGURO . 'sessions?email=' . EMAIL_PAGSEGURO . '&token=' . TOKEN_PAGSEGURO,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST'
));

$response = curl_exec($curl);

curl_close($curl);*/

SE O ID NAO EXISTIR, CRIAR UM NOVO, SE EXISTIR USAR O JÁ EXISTENTE

if(session){
	return;
}else{
	criaSessaoPagSeguro();
}
function criaSessaoPagSeguro(){
	$url = URL_PAGSEGURO ."sessions?email=".EMAIL_PAGSEGURO."&token=".TOKEN_PAGSEGURO;

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded; charset=UTF-8"));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$retorno = curl_exec($curl);
curl_close($curl);

$xml = simplexml_load_string($retorno);

$_SESSION[$ID_PAGSEGURO = $xml_obj];


var_dump($xml);
}


