<?php
class Date
{
    public $year;
    public $month ;
    public $day;
    public function __construct($year,$month,$day)
    {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }
    public function __get($property)
    {
        if($property == 'weekDay'){
            return date('w', strtotime($this->year .'-'. $this->month .'-'. $this->day));
        }
    }
}

$date = new Date(2023,04,07);
echo $date->weekDay;