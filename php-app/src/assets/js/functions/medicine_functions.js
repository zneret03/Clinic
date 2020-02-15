
    //medicine Delete function
    $(document).on('click','#btnDeleteMedicine',function(){
        let choices = confirm("Are you sure do you want to Delete this data?")
        if(choices)
        {
            let delete_id = $(this).data('id');
            $.ajax({
                type : "POST",
                url : "../data/medicine.data.php",
                data : {delete_medicine : delete_id},
                success : function(data)
                {
                    swal.fire({
                        title : "Deleted Successfully",
                        text : "Click ok to proceed",
                        icon : "success"
                    }).then((confirm) => {
                        if (confirm) {
                            location.reload();
                        }   
                    });
                },
                error : function()
                {
                    alert('ERROR');
                }
            });
        }
        else
        {
            swal.fire({
                title : "Cancel",
                text : "be careful for clicking the buttons you dumbass",
                icon : "error"
            });
        }
    });
    
    //Medicine Update Function
    $(document).on('click','#button_update',function(){
        let id = $('#medicine_code').val();
        let name = $('#medicine_name').val();
        let brand = $('#medicine_brand').val();
        let unit = $('#medicine_unit').val();
        let quantity = $('#medicine_quantity').val();
        let other_name = $('#medicine_other_name').val();
        let description = $('#medicine_description').val();

        var medicine = [name,
        brand,
        unit,
        quantity,
        other_name,
        description,
        id];
        
        //console.log(medicine);
        $.ajax({
            method : "POST",
            url : "../data/medicine.data.php",
            data : {medicine_data : medicine},
            success : function(data)
            {
                //alert('SUCCESS');
                //location.reload();
                
                swal.fire({
                    title : "Updated",
                    text : " Successfully Click ok to continue",
                    icon : "success"
                }).then((confirm) => {
                    if(confirm)
                    {
                        location.reload();
                    }
                });

            },
            error : function()
            {
                alert('ERROR AJAX REQUEST')
            }
        });
    });

    //fetch data from database and put it in the modal
    $(document).on('click','#getEdit',function(e){
        var edit_id = $(this).data('id');
        //alert(edit_id);
        //$('#content').html('');
        $.ajax({
            url  : 'update_medicine.php',
            type : 'POST',
            data : 'id='+edit_id,
            success : function(data)
            {
                $('#content-data').html(data);
            },
            error : function()
            {
                alert("ERROR");
            }
            /*
            }).done(function(data){
                $('#content').html('');
                $('#content').html(data);
            }).fail(function(){
                $('#content').html('<p>Error</p>');
            */
        });
    });

    //DataTable using server side processing
    $('#medicineTable').DataTable({
            "processing" : true,
            "serverSide" : true,
            "ajax" : 
            {
                url: "../model/medicine_table.mod.php",
                type : "POST"
            }
    });