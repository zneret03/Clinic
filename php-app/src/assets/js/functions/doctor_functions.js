
    $('#doctorsTable').DataTable({
        "processing" : true,
        "serverSide" : true,
        "ajax" : 
        {
            type : "POST",
            url : "../tables/doctor_table.php"
        }
    });

    $(document).on('click','#getDoctor', function(){
        let id = $(this).data('id');
        
        $.ajax({
            type : "POST",
            url : "../includes/update_doctor.php",
            data : {doctor_id : id},
            success : function(data)
            {
                $('#content-data').html(data);
            },
            error : function()
            {
                alert("ERROR AJAX REQUEST");
            }
        });
    });

    $(document).on('click','#btn_update_doc',function(){
            let id = $('#doc_id').val();
            let firstname = $('#doctor_firstname').val();
            let middlename = $('#doctor_middlename').val();
            let lastname = $('#doctor_lastname').val();
            let abbreviation = $('#doctor_abbreviation').val();
            let address = $('#doctor_address').val();
            let age = $('#doctor_age').val();
            let gender = $('#gender_doctor').val();

            let doctor_details = [
                firstname,
                middlename,
                lastname,
                abbreviation,
                address,
                age,
                gender,
                id
            ];

            //console.log(doctor_details);

            $.ajax({
                type : "POST",
                url : "../data/doctor.data.php",
                data: {doctor_credentials : doctor_details},
                success : function(data)
                {
                    swal.fire({
                        title : "Updated Successfully",
                        text : "Please click ok to continue",
                        icon : "success"
                    }).then((success) => {
                        if(success)
                        {
                            location.reload();
                        }
                    });
                },
                error : function()
                {
                    alert("ERROR Ajax request");
                }
            });
    });

    $(document).on('click','#btnDeleteDoctor', function(){
        let id = $(this).data('id');

        if(confirm("Do you really want to delete this record ?"))
        {
            $.ajax({
                type : "POST",
                url : "../data/doctor.data.php",
                data : {doctor_id : id},
                success : function(data)
                {
                    swal.fire({
                        title : "Delete Successfully",
                        text : "Click ok to continue",
                        icon : "success"
                    }).then((success) => {
                        if(success)
                        {
                            location.reload();
                        }
                    });
                },
                error : function()
                {
                    alert('ERROR AJAX REQUEST');
                }
            });
        }
        else
        {
            swal.fire({
                title : "Cancelled successfully",
                text : "next time be careful to click the buttons dumbass",
                icon : "error"
            });
        }
       
    });


