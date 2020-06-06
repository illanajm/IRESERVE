$(document).ready(function(){
	$('#submit').on("click", function(){
		var company = $('#company').val();

		if(company == 'one'){
			 window.location.assign("");//ip address and file folder http://ipaddress/file loginFile
		}else if(company == 'two'){
			 window.location.assign("http//google.com");
		}else{
			 window.location.assign("http//youtube.com");
		}
		
	});
});