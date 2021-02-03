function criarSessao(){

    var endereco = jQuery('.endereco').attr("data-endereco");

    $.ajax({
        url: endereco + "/config/pagamento.php",
        type: 'POST',
        dataType: 'json',
        success: function (retorno){
            PagSeguroDirectPayment.setSessionId(retorno.id);
        },
        complete: function(){
        	listaMeiosPagamento();
        }
    });
}

function listaMeiosPagamento(){
	PagSeguroDirectPayment.getPaymentMethods({
		amount: 500.00,
		success: function(data){
			$.each(data.paymentMethods.CREDIT_CARD.options, function(i, obj)){
				$('.CartaoCredito').append("<div><img src='https://stc.pagseguro.uol.com.br/"+obj.images.SMALL.path+">"+obj.name+"'></div>");
			}		
		},
		complete: function(data){

		}
	})

}