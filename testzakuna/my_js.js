$(function(){
	$('input[type="number"]').on('focus',function(e){
		$(this).select();
	})
})

function switchbilangan(elem){
	$.ajax({
		url     : $(elem).attr('action'),
		//mengirimkan username dan password ke script login.php
		data    : $(elem).serializeArray(),
		//Method pengiriman
		type    : 'POST',
		//Respon jika data berhasil dikirim
		success : function(pesan){			
			$('div#areahasil').append(pesan).slideDown();
		},
	});		
	
	return false;
}