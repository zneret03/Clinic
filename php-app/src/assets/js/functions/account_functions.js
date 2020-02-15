
    $(document).on('click','#logout',function(){
            let id = $(this).data('id');
            
            //console.log(id);
            
            $.ajax({
                type : "POST",
                url : "../data/account.data.php",
                data : {logout : id}
            });
            
            
    });

    function deleteData(Login_id)
    {
        if(confirm("Do you want to delete this data?"))
        {
            let id = Login_id;
            $.ajax({
                type : "POST",
                url : "../data/account.data.php",
                data : {time_id : id},
                success : function(data)
                {
                    swal.fire({
                        title : "Delete Successfully",
                        text : "Click ok to continue",
                        icon : "success",
                    }).then((success) => {
                        if(success)
                        {
                            $('#timeData'+id).hide('slow');
                            location.reload();
                        }
                    });
                },
                error : function()
                {
                    alert("Error ajax request");
                }           
            });
        }
        else
        {
            swal.fire("Cancelled","Your data is safe now","error");
        }
    }
    

    $(document).ready(function(){
        showClock();
    });

    //Accont DataTable using Serverside processing
    $('#user-table').DataTable({
        "processing" : true,
        "serverSide" : true,
        "ajax" : 
        {
            url  : "../model/account_table.php",
            type : "POST"
        }
    });

    //fetch data from serverside processing DataTable
    $(document).on('click','#getAccount',function(){
        let account_id = $(this).data('id');
        //alert(account_id);
        $.ajax({
            url : "update_account.php",
            type : "POST",
            data : {account:account_id},
            success : function(data)
            {
                $('#content-data').html(data);
            },
            error : function()
            {
                alert('ERROR AJAX REQUEST');
            }
        });
    });

    $(document).on('click', '#update_account', function(){
        let user_code = $('#account_id').val();
        let user_email = $('#account_email').val();
        let username = $('#account_username').val();
        let firstname = $('#account_firstname').val();
        let middlename = $('#account_middlename').val();
        let lastname = $('#account_lastname').val();
        let usertype = $('#account_usertype').val();
        let date = $('#account_date').val();

        let account = [
            user_email,
            username,
            firstname,
            middlename,
            lastname,
            usertype,
            date,
            user_code
        ];
        
        $.ajax({
            type : "POST",
            url : "../data/account.data.php",
            data : {account_data : account},
            success : function(data)
            {
                swal.fire({
                    title : "Updated",
                    text : "Successfully please click ok to continue",
                    icon : "success"
                }).then((success)=>{
                    location.reload();
                });
                //alert('Success');
                //location.reload();
            },
            error : function()
            {
                alert('ERROR AJAX REQUEST');
            }
        });
    });

    $(document).on('click','#btnDeleteAccount', function()
    {
        if(confirm("Do you want to delete this message?"))
        {
            let user_id = $(this).data('id');
            $.ajax({
                type : "POST",
                url : "../data/account.data.php",
                data : {user : user_id},
                success : function(data)
                {
                        swal.fire({
                            title : "Delete",
                            text : "Successfully please click okay to continue",
                            icon : "success"
                        }).then((success) => {
                            location.reload();
                        });
                
                },
                error : function()
                {
                    alert('Error Ajax request');
                }
            });
        }
        else
        {
            swal.fire({
                title : "Delete Cancelled",
                text : "Next time carefully click the buttons you dumbass",
                icon : "error"
            });
        }
    });

  