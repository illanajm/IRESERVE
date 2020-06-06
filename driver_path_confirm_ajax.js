$(document).ready(function(){
    $('#confirm').on('click', function(){
        var mobile = $('#mobile').val();
        var bus_body_number = $('#bus_body_number').val();
        var passenger = $('#passenger').val();
        
        if(mobile == "" || bus_body_number == "" || passenger == ""){
            alert("Error Empty Field");
        }else{
            $.ajax({
                type:"POST",
                url:"driver_path_confirm.php",
                data:{
                    submit:true,
                    mobile:mobile,
                    bus_body_number:bus_body_number,
                    passenger:passenger
                },
                success:function(data){
                    alert("success");
                }
            });
        }
    });

    $('#reject').on('click', function(){
         var mobile = $('#mobile').val();
        var bus_body_number = $('#bus_body_number').val();
        var passenger = $('#passenger').val();
        
        if(mobile == "" || bus_body_number == "" || passenger == ""){
            alert("Error Empty Field");
        }else{
            $.ajax({
                type:"POST",
                url:"driver_path_reject.php",
                data:{
                    reject:true,
                    mobile:mobile,
                    bus_body_number:bus_body_number,
                    passenger:passenger
                },
                success:function(data){
                    alert("success");
                }
            });
        }
    });
    });
