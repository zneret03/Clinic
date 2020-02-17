    
    //If yes show appointments Date, diseases, doctor form
    $(document).ready(function()
    {
        $('#problems').on('change',function(){
            let e = document.getElementById("problems");   
            let onchangeSelect = e.options[e.selectedIndex].text;

            if(onchangeSelect == "Yes")
            {
                $('#appointmentsDate').show("slow");
                $('#diseases').show("slow");
                $('#doctor').show("slow");
            }
            else
            {
                $('#appointmentsDate').hide("slow");
                $('#diseases').hide("slow");
                $('#doctor').hide("slow");
            }
        });
    });

    $(document).ready(function(){
        $('#calculate').on('click', function(){
            let e = document.getElementById('diseasesProblem').value;
            let choices = selectedProblem(e);
            const appointments_fee = 500;

            const data = [
                choices,
                appointments_fee
            ];

            //Calculate total payments
            const total = setPayments(data);

            //json format data
            /*  
            const appointments = {
                "doctorid" :  $('#doctorid').val(),
                "firstname" : $('#firstname').val(),
                "middlename" : $('#middlename').val(),
                "lastname" : $('#lastname').val(),
                "phoneNumber" : $('#phoneNum').val(),
                "email" : $('#user_email').val(),
                "notes" : $('#description').val(),
                "address" : $('#address').val(),
                "age" : $('#age').val(),
                "gender" : $('#gender').val(),
                "totalPayments" : total,
                "appointments" : $('#appointments').val()
            }
            */

            
            if(appointments.firstname == " " || appointments.middlename == " " ||
               appointments.lastname == " " || appointments.phoneNumber == " " || 
               appointments.email == " " || appointments.notes == " " || 
               appointments.address == " " || appointments.age == " " || 
               appointments.gender == " ")
            {
                //End user validation  
                Uservalidation();
            } 
            else
            {   
                $('#Userpayments').show('slow');
                $('#submitAppointment').show('slow');
                //Insert to the database
                //insert(appointments);
            }
            
        });
    });

    $(document).ready(function(){
        $('#cancel').on('click',function(){
            $('#Userpayments').hide('slow');
            $('#appointmentsForm')[0].reset();
        });
    });

    /*
    //pass data to the database
    function insert(data)
    {
        $('#submitAppointment').on('click', function(){
            $.ajax({
                url : "../data/appointments.data.php",
                method : "POST",
                data : {data : data},
                success : function()
                {
                    alert("Success");
                },
                error : function()
                {
                    alert("Ajax request error");
                }
            });
        });
    }
    */

    //Calculate total payments
    function setPayments(data)
    {
        let check_up_fee = document.getElementById('check_up_fee').value = data[0];
        let appointments_Fee = document.getElementById('appointments_fee').value = data[1];
        let total = document.getElementById('total').value = (check_up_fee + appointments_Fee + "Php");
        
        return total;
    }
    
    //if end user dont have problems return empty
    function selectedProblem(problems)
    {
        problems;
        let converted;
        if(problems == false)
        {
            return problems;
        }
        else
        {
            converted = parseInt(problems, 10);
        }
         
        return converted;
    }

    //calendar to be selected of end user schedule
    $(document).ready(function(){
        var calendar = document.getElementById('calendar');
            
        let appCalendar = new FullCalendar.Calendar(calendar,{
            plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list', 'rrule' ],
            header : 
            {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth'
            },
            selectable : true,
            selectHelper : true,
            //events
            eventLimit : true,
            select : function(event)
            {
                $('#patientsAppointments').show('slow');
                $('#patientsAppointments #appointments').val(moment(event.startStr).format("YYYY-MM-DD"));
            }
        });
        appCalendar.render();
    });

    //List calendar will fetch the data and display the remaining slots for appointments
    $(document).ready(function(){
        var listCalendar = document.getElementById('list');

        let listcalendar = new FullCalendar.Calendar(listCalendar,{
            plugins: ['list'],
            defaultView : 'listWeek',
            //events
            eventLimit : true,
            views : {
                listMonth : {buttonText : 'Month'}
            },
            header : 
            {
                left : "title",
                center : "",
                right : "listMonth"
            }
        });
        listcalendar.render();
    });

    //Check if the end user fill all the required forms else prevent to sumbit appointment
    function Uservalidation()
    {
        $('#appointmentsForm').validate({
            rules :
            {
                firstname : 
                {
                    required : true
                },
                middlename :
                {
                    required : true
                },
                lastname : 
                {
                    required : true
                },
                phoneNum : 
                {
                    required : true,
                    minlength : 11
                },
                email :
                {
                    required : true,
                    email : true
                },
                description :
                {
                    required : true
                },
                address : 
                {
                    required : true
                },
                age : 
                {
                    required : true
                },
                gender : 
                {
                    required : true
                }
            },
            messages : 
            {
                firstname : 
                {
                    required : "please fill all forms"
                },
                middlename :
                {
                    required : "please fill all forms"
                },
                lastname : 
                {
                    required : "please fill all forms"
                },
                phoneNum :
                {
                    required : "please fill all forms",
                    minlength : "must not exceed 11 digit"
                },
                email :
                {
                    required : "please fill all forms",
                    email : "must be valid a email"
                },
                description : 
                {
                    required : "please fill all forms"
                },
                address :
                {
                    required : "please fill all forms"
                },
                age :
                {
                    required : "please fill all forms"
                },
                gender :
                {
                    required : "please fill all forms"
                }
            }
        });
            $('#appointmentsForm').submit();
    }
    
   

    
   
