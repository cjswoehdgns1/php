<?php
class Cal_Day{
    public $day;
    public $check;
    public $holiDay;
}

$nowDay = new Cal_Day();

$nowDay->check = "정상";
$nowDay->day = 15;
$nowDay->holiDay = TRUE;

print_r($nowDay);

?>