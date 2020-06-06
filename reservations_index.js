$(document).ready(function(){
    
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Add Company");
		$('#action').val("Add");
		$('#operation').val("Add");
		$('#user_uploaded_image').html('');
	});
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"reservation_fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0, 3, 4],
				"orderable":false,
			},
		],

	});

	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var mobile = $('#mobile').val();
		var bus_body_number = $('#bus_body_number').val();
		
		 if(mobile != '' && bus_body_number != '')
		{
			$.ajax({
				url:"reservation_text.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#user_form')[0].reset();
					$('#userModal').modal('hide');
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			alert("Both Fields are Required");
		}
	});
	$(document).on('click', '.update', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"reservation_fetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#mobile').val(data.mobile);
				$('#bus_body_number').val(data.bus_body_number);
				$('.modal-title').text("Driver");
                $('#user_id').val(user_id);
				$('#user_uploaded_image').html(data.user_image);
				$('#action').val("Confirm");
				$('#operation').val("Edit");
              
			}
		})
	})
	
	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
		if(confirm("Are you sure you want to delete this?"))
		{
			$.ajax({
				url:"reservation_delete.php",
				method:"POST",
				data:{user_id:user_id},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			return false;	
		}
	});
	
	
});