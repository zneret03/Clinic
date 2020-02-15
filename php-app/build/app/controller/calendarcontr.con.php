<?php
    include_once '../model/calendar.mod.php';
    class Calendarcontr extends calendar
    {
        public function setCalendar($calendar)
        {
            $this->insertCalendar($calendar);
        }

        public function setScheduller($data)
        {
            $this->updateSchedule($data);
        }

        public function eventResDrop($data)
        {
            $this->updateSchedule($data);
        }

        public function deleteSchedule($Data)
        {
            $this->DeleteSheduler($Data);
        }
    }