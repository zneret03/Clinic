    function getTimeFormat(h)
    {
        return hours = (h == 0 ) ? h = 12 : (h > 12) ? h -= 12 : h ;
    }

    //return ante meridian (AM) and post meridian (PM) of a day
    function timeMeridian(h)
    {
        return post_ante = (h >= 12) ? post_ante = " PM" : post_ante = " AM";
    }

    function showClock()
    {
        let date = new Date();
        let h = date.getHours();
        let m = date.getMinutes();
        let s = date.getSeconds();

        let time = ":" + m + ":" + s;
        let timeformat = getTimeFormat(h);
        let post_ante = timeMeridian(h);
        
        document.getElementById('clock').innerHTML = timeformat + time + post_ante;
        setTimeout(showClock, 1000);
    }

    $(document).ready(function(){
        showClock();
    });
    
    //Step wizard
    $('#smartWizard').smartWizard
    ({
            selected : 0,
            keyNavigation : true,
            enableAllSteps: false,
            errorSteps: [],
            autoAdjustHeight : true,
            backButtonSupport : true,
            theme : 'circles',
            transition : 'slide',
            transitionSpeed : '400',
            transitionEffect : 'fade',
            lang : {
                next : 'Next',
                previous : 'Previous',
            },
            showNextButton : true,
            showPreviousButton : true,
            useURLhash : true,
            toolbarSettings : {
                toolbarPosition : 'bottom',
            },
           
    });   
    
    /*
    $('#smartWizard').on("leaveStep",function(e, anchorObject, stepNumber, stepDirection){
        let step = $('#form-step-' + stepNumber);
        alert(step);
    });
    */


    $(document).ready(function(){
        $('#patientTable').DataTable();
        //$('#onlineUserTable').DataTable();
    }); 
    

    $(document).ready(function()
    {
        var i = 1;
        i++;
        $('#addList').on('click',function()
        {
            $('#table-list').append('<tr id="row'+i+'"><td class="col-lg-12"><input type="text" class="form-control" name="name[]" placeholder="List of hospitalization"> </td>'+
                '<td><input type="date" class="form-control" name="dateOccurs" id="dateOccurs"></td>'+
                '<td><button type="button" class="btn btn-danger btn_remove" name="remove" id="'+i+'">'+
                '<i class="fas fa-times fa-lg text-white"></i> </button></td></tr>');

        }); 

        $('#child-btn').on('click',function()
        {
            $('#child-list').append('<tr id="child-row'+i+'"><td><input type="text" id="childern" name="childern[]" class="form-control" placeholder="children"></td>' +
                '<td><input type="text" id="age" name="age[]" class="form-control" placeholder="children Age"></td>' +
                '<td><input type="text" id="disease" name="disease[]" class="form-control" placeholder="children Disease"></td>' +
                '<td><button type="button" class="btn btn-danger child_btn_remove" name="remove" id="'+i+'">' + 
                '<i class="fas fa-times fa-lg text-white"></i></button></td></tr>');
        });

        $('#add-medication').click(function(){
            $('#list_medications').append(' <tr id="medications'+i+'">' +
                                            '<td><h4><span class="badge purple-gradient">Medication</span></h4></td>' +
                                            '<td class="col-lg-12"><input type="text" class="form-control" name="medications" name="list-medications" placeholder="List of Medications"></td>' +
                                            '<td><button type="button" id="'+i+'" class="btn btn-danger btn_medication_remove"><i class="fas fa-times fa-lg text-white"></i></button></td>' +
                                            '</tr>');
        });
    });

    $(document).on('click','.btn_medication_remove',function(){
            var medication_id = $(this).attr('id');
        $('#medications'+medication_id+'').remove();
    });

    $(document).ready(function(){
        $('.check-tobacco').click(function(){
            $('.check-tobacco').not(this).prop("checked",false);
            if ($('#packs').is(':checked')) 
                $('#tobacco-toggle').append('<td id="tobacco" colspan="6"><input type="text" class="form-control"  placeholder="Current packs per day"></td>');
            else
                $('#tobacco').remove();
                uncheck_checkbox();
        });
    });

    $(document).ready(function(){
        $('.check-drugs').on('click',function(){
            if($(this).is(':checked'))
            {
                $('.check-drugs').not(this).prop("checked",false);
                if($('#type-of-frequency').is(':checked'))
                    $('#drugs').append('<td id="drug-user" colspan="6"><input type="text" class="form-control" placeholder="Type of Frequency"></td>');
                else 
                    $('#drug-user').remove();
            }

            uncheck_checkbox();
        });
    });


    $(document).ready(function(){
        $('.check-status').on('click',function(){
            if($(this).is(':checked'))
            $('.button-delete').not(this).prop("checked",false);
        });
    });

    $(document).ready(function(){
        $('.check-alcohol').on('click',function(){
            if($(this).is(':checked'))
            $('.check-alcohol').not(this).prop("checked",false);
        });
    });

    $(document).ready(function(){
        $('.check-work').on('click',function(){
            if($(this).is(':checked'))
            $('.check-work').not(this).prop("checked",false);
        });
    });


    function uncheck_checkbox()
    {
        if(document.getElementById('packs').checked === false)
            $('#tobacco').remove();

        if(document.getElementById('type-of-frequency').checked === false)
            $('#drug-user').remove();
    }
    

    $(document).on('click','.btn_remove, .child_btn_remove', function()
    {
        var btn_id = $(this).attr("id");
        $('#row' + btn_id +'').remove();
        $('#child-row'+ btn_id +'').remove();
    });


    //Getting Element Id of a HTML element canvas
    var chart = document.getElementById("patientChart").getContext('2d');
    //importing Chart class
    var lineChart = new Chart(chart,{
        type: 'line',
        data : {
            labels : ["January","Febuary","March","April","May","July","August","September","October","November","December"],
            datasets: [{
                //Patient not admitted chart
                label : "Patient admitted",
                //Static data to be converted from the actual data
                data : [55,40,70,12,5,64,78,95,12,78,43,56],
                //Bg color for Patients not admitted
                backgroundColor: [
                    'rgba(0, 0, 225, .2)',
                ],
                borderColor: [
                    'rgba(255, 0, 0, .7)',
                ],
                borderWidth: 2
            },
            {
                //Patient admitted chart
            label : "Patients not admitted",
            //Static data to be converted from the actual data
            data : [12,55,67,87,98,55,87,56,99,34,21],
            //Bg color for Patients admitted chart
            backgroundColor:[
                'rgba(0, 0, 255, .2)',
            ],
            borderColor: [
                'rgba(0, 0, 132, .7)',
            ],
            borderWidth : 2
            }
            ]
        },
        options: {
            responsive: true
        }
    });

