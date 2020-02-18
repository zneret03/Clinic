<?php
    include_once '../model/calendar.mod.php';
    $cal = new calendar();
    $calendarDetails = $cal->fetchCalendar();
    
    foreach($calendarDetails as $value)
    {
        $calendar[] = array(
            'id'    => $value['sheduller_id'],
            'title' => $value['title'],
            'color' => $value['color'],
            'start' => $value['start_event'],
            'end'   => $value['end_event'],
        );
    }

    if(empty($calendar))
    {
        echo " ";
    }
    else
    {
        echo json_encode($calendar);
    }

