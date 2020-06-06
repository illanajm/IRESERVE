$(document).ready(function(){
	$('#submit').on("click", function(){
		var company = $('#company').value();

		if(company == 'one'){
			 window.location.assign("company_one.php");
}
		}
	});
});