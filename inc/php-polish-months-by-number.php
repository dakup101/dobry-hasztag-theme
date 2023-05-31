<?php
function get_month_in_pl_by_number($month){
    $month_name = 'a';
    switch ((int)$month) {
        case 1:
            $month_name = 'styczeń';
            break;
        case 2:
            $month_name = 'luty';
            break;
        case 3:
            $month_name = 'marzec';
            break;
        case 4:
            $month_name = 'kwiecień';
            break;
        case 5:
            $month_name = 'maj';
            break;
        case 6:
            $month_name = 'czerwiec';
            break;
        case 7:
            $month_name = 'lipiec';
            break;
        case 8:
            $month_name = 'sierpień';
            break;
        case 9:
            $month_name = 'wrzesień';
            break;
        case 10:
            $month_name = 'październik';
            break;
        case 11:
            $month_name = 'listopad';
            break;
        case 12:
            $month_name = 'grudzień';
            break;
    }
    return $month_name;
}