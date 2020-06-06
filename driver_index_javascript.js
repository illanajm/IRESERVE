$(document).ready(function(){
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Add Driver");
		$('#action').val("Add");
		$('#operation').val("Add");
		$('#user_uploaded_image').html('');
	});
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"driver_fetch.php",
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
		var firstname = $('#firstname').val();
		var middlename = $('#middlename').val();
		var lastname = $('#lastname').val();
		var age = $('#age').val();
		var address = $('#address').val();
		var status = $('#status').val();
		var driver_licence = $('#driver_licence').val();
		var username = $('#username').val();
		var password = $('#password').val();
		var confirm = $('#confirm').val();
		var company_id = $('#company_id').val();
		
		
		if(confirm != password){
			alert("PASSWORD NOT MATCH");
		}else if(firstname != '' && lastname != '')
		{
			$.ajax({
				url:"driver_insert.php",
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
			url:"driver_fetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#firstname').val(data.firstname);
				$('#middlename').val(data.middlename);
				$('#lastname').val(data.lastname);
				$('#age').val(data.age);
				$('#address').val(data.address);
				$('#status').val(data.status);
				$('#driver_licence').val(data.driver_licence);
				$('#username').val(data.username);
				$('#password').val(data.password);
				$('#user_id').val(data.user_id);
				$('.modal-title').text("Edit Driver");
				$('#user_id').val(user_id);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});
	
	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
		if(confirm("Are you sure you want to delete this?"))
		{
			$.ajax({
				url:"driver_delete.php",
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