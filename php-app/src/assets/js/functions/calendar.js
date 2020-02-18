    $(document).ready(function() {
        let calendarEl = document.getElementById('calendar');

        let calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list', 'rrule' ],
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
        editable: true,
        eventLimit : true, //Limits the number of events displayed on a day
            view : {
                timeGrid : 
                {
                    eventLimit : 4
                }
            },
            selectable : true,
            selectHelper : true,
            eventTextColor : '#FFFFFF',     
            events : '../view/loadCalendar.view.php',
            select : function(event)
            {
                $('#calendarModal #start').val(moment(event.startStr).format('YYYY-MM-DD HH:mm:ss'));
                $('#calendarModal #end').val(moment(event.endStr).format('YYYY-MM-DD HH:mm:ss'));
                
                $('#calendarModal').modal('show');
            },
            eventClick : function(info)
            {
              $('#calendarModalUpdate #id').val(info.event.id);
              $('#calendarModalUpdate #title').val(info.event.title);
              $('#calendarModalUpdate #color').val(info.event.color);
              $('#calendarModalUpdate #start').val(moment(info.event.start).format('YYYY-MM-DD HH:mm:ss'));
              $('#calendarModalUpdate #end').val(moment(info.event.end).format('YYYY-MM-DD HH:mm:ss'));   
              $('#calendarModalUpdate').modal('show');
              
              //Delete button onClick
              checkBoxOnclick();
              
              //Delete Scheduller
              deleteSchedule(info);
            },
            editable : true,
            eventResize : function(info)
            {
                edit(info);
            },
            eventDrop : function(info)
            {
                edit(info);
            }
        });

        function edit(info)
        {
            let id = info.event.id;
            let start = moment(info.event.start).format('YYYY-MM-DD HH:mm:ss');
            let end = moment(info.event.end).format('YYYY-MM-DD HH:mm:ss');

            let data = [
                start,
                end,
                id
            ];

            //alert(data);
            $.ajax({
                type : "POST",
                url : "../data/calendar.data.php",
                data : {data : data},
                success : function()
                {
                    calendar.FullCalendar('refetchEvents');
                    //alert("Success");
                },
                error : function()
                {
                    alert("ERRORRRRR");
                }
            });
        }

        calendar.render();
    });

     //Listview fullCalendar
     $(document).ready(function(){
        var calendar_list = document.getElementById('calendar_list');

        let calendarList = new FullCalendar.Calendar(calendar_list,{
            plugins : ['list'],
            defaultView : 'listWeek',
            events : '../view/loadCalendar.view.php',
            eventLimit : true,
            views : {
                listDay : {buttonText : 'Day'},
                listWeek : {buttonText : 'Week'},
                listMonth : {buttonText : 'Month'}
            },
            header : {
                left : 'title',
                center : '',
                right : 'listDay, listWeek, listMonth'
            },
            eventClick : function(info)
            {
                deleteListSchedule(info);
            }
        });
        calendarList.render();
    });

    function deleteListSchedule(info)
    {
        $(document).ready(function(){
            let list_id = info.event.id;
            if(confirm("do you want to delete this ?"))
            {
                $.ajax({
                    type : "POST",
                    url : "../data/calendar.data.php",
                    data : {dataDelete : list_id},
                    success : function()
                    {
                        swal.fire({
                            title : "Deleted Successfully",
                            text : "Please click ok to continue",
                            icon : "success"
                        }).then((success)=>{
                            if(success)
                            {   
                                location.reload();
                            }
                        })
                    },
                    error : function()
                    {
                        alert('AJAX REQUEST ERROR');
                    }
                });
            }
            else
            {
                swal.fire({
                    title : "Your data is safe",
                    text : "Please click ok to continue",
                    icon : "error"
                });
            }   
        });        
    }

    function deleteSchedule(info)
    {
        $('#deleteSchedule').on('click', function(){
            let id = info.event.id;
            if(confirm("Do you want to delete this message?"))
            {
                $.ajax({
                    type : "POST",
                    url : "../data/calendar.data.php",
                    data : {dataDelete : id},
                    success : function()
                    {
                        swal.fire({
                            title : "Deleted Successfully",
                            text : "Please click ok to continue",
                            icon : "success"

                        }).then((success)=>{
                            if(success)
                            {
                                location.reload();
                            }
                        });
                    },
                    error : function()
                    {
                        alert('ERRORR');
                    }
                });
            }
            else
            {
                swal.fire({
                    title : "Cancell Successfully",
                    icon : "error",
                    text : "your data is safe"
                });
            }
            //alert(id);
        });
    }

    //Check if checkbox checked or not
    function checkBoxOnclick()
    {
        $('#deleteCheckBox').on('click',function(){  

                if ($('#deleteCheckBox').is(':checked')) 
                {
                    $('#deleteSchedule').show();
                    $('#btn_calendar_update').hide('slow');
                }
                else
                {
                    unchecked();
                    $('#btn_calendar_update').show('slow');
                }
        });
    }

   
    function unchecked()
    {
        
        if(document.getElementById('deleteCheckBox').checked == false)
        {
            $('#deleteSchedule').remove();
        }
    }