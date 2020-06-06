$(document).ready(function(){
	$('#sub').on("click", function(){
		var company_name = $('#company_name').val();
		var company_address = $('#company_address').val();

		if(company_name == "" || company_address == ""){
			alert("Error Empty Set");
		}else{
			$.ajax({
				type:"POST",
				url:"insert_company.php",
				data:{
					inside:true,
					company_name:company_name,
					company_address:company_address
					
				},
				success:function(data){
					if(data){
						alert("Success");
					}
				},
			});
		}
	});
});