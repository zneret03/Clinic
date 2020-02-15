    //account form valdation
    $('#userForm').validate({
        rules : 
        {
            email : 
            {
                required : true,
                email : true
            },
            username :
            {
                required : true,
                minlength : 5
            },
            firstname :
            {
                required : true,
                firstname : true
            },
            middename :
            {
                required : true,
                middename : true
            },
            lastname :
            {
                required : true,
                lastname : true
            },
            password : 
            {
                required : true,
                minlength : 8
            },
            confirm_password :
            {
                required : true,
                minlength : 8,
                equalTo : "#password"
            },
            usertype :
            {
                required : true
            }
        },
        messages : 
        {
            email :
            {
                required : "don't leave the field empty",
                email : "it must be valid email"
            },
            username : 
            {
                required : "don't leave the field empty",
                minlength : "your username must be 5 characters long"
            },
            firstname :
            {
                required : "don't leave the field empty",
                firstname : "Please enter your firstname"
            },
            middlename :
            {
                required : "don't leave the field empty",
                middlename : "Please enter your middlename"
            },
            lastname :
            {
                required : "don't leave the field empty",
                middlename : "Please enter your lastname"
            },
            password :
            {
                required : "don't leave the field empty",
                minlength : "it must be 8 characters long"
            },
            confirm_password :
            {
                required : "don't leave the field empty",
                minlength : "it must be 8 characters long",
                equalTo : "Your password dont match"
            },
            usertype :
            {
                required : "Please choose your usertype"
            }

        }
    });

    $('#btn_submit_account').on('click',function(){
        $('#userForm').submit();
    });
