$(document).ready(function(){
	$('#submit').on("click", function(){
		var bus_body_number = $('#bus_body_number').val();
		var bus_plate_number = $('#bus_plate_number').val();
		var path = $('#path').val();

		if(bus_body_number == "" || bus_plate_number == ""){
			alert("error!");
		}else{
			$.ajax({
				type:"POST",
				url:"insert_bus.php",
				data:{
					bus:true,
					bus_body_number:bus_body_number,
					bus_plate_number:bus_plate_number,
					path:path
				},
				cache:false,
				success:function(data){
					if(data){
						alert("success");
					}else{
						alert("Error");
					}
				}
			});
		}
	});
});