<?php
    include_once '../controller/calendarcontr.con.php';
    $calendar = new Calendarcontr();
    //save calendar schedule to database
    if(isset($_POST['btn_calendar']))
    {
        //print_r($_POST['calendarDate']);
        $r = rand();
        $y = date('Y');
        $appointment_id = $r.$y;

        $calendarDetails = data(
            $appointment_id,
            $_POST['title'],
            $_POST['color'],
            $_POST['start'],
            $_POST['end']
        );
        $calendar->setCalendar($calendarDetails);
    }

    //Update scheduller
    if(isset($_POST['btn_calendar_update']))
    {
        $data = array(
            $_POST['title'],
            $_POST['color'],
            $_POST['start'],
            $_POST['end'],
            $_POST['id']
        );
        
        $calendar->setScheduller($data);
    }
    
    //Even Resize and drop
    if(isset($_POST['data']))
    {
        $calendar->eventResDrop($_POST['data']);
    }

    if(isset($_POST['dataDelete']))
    {
        $calendar->deleteSchedule($_POST['dataDelete']);
    }

    function data($id,$title,$color,$start,$end)
    {
        $data = array(
            $id, 
            $title,
            $color,
            $start,
            $end
        );
        return $data;
    }