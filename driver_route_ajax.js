$(document).ready(function(){
	$('#boton').on("click", function(){
		var origin = $('#origin').val();
		var destination = $('#destination').val();
		var bus_id = $('#bus_id').val();


		if(bus_id == ""){
			alert("Error! Empty Set");
		}else{
			$.ajax({
				type:"POST",
				url:"driver_path.php",
				data:{
					route:true,
					origin:origin,
					destination:destination,
					bus_id:bus_id
				},
				success:function(data){
					if(data){
						alert("Success");
						$("body").load("success.php").hide().fadeIn(1500);
					
					}else{
						alert('error');
					}
			}
			});
		}
	});
});