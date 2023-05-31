<?php
function get_days_in_pl_by_number($day){
    $day_name = "";
    switch ((int)$day) {
        case 7:
            $day_name = 'niedziela';
            break;
        case 1:
            $day_name = 'poniedziałek';
            break;
        case 2:
            $day_name = 'wtorek';
            break;
        case 3:
            $day_name = 'środa';
            break;
        case 4:
            $day_name = 'czwartek';
            break;
        case 5:
            $day_name = 'piątek';
            break;
        case 6:
            $day_name = 'sobota';
            break;
    }
    return $day_name;
}