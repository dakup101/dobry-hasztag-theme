<?php
function get_month_in_pl($date){
    $month = $date->format('F');
    $month_name = '';
    switch ($month) {
        case 'January':
            $month_name = 'styczeń';
            break;
        case 'February':
            $month_name = 'luty';
            break;
        case 'March':
            $month_name = 'marzec';
            break;
        case 'April':
            $month_name = 'kwiecień';
            break;
        case 'May':
            $month_name = 'maj';
            break;
        case 'June':
            $month_name = 'czerwiec';
            break;
        case 'July':
            $month_name = 'lipiec';
            break;
        case 'August':
            $month_name = 'sierpień';
            break;
        case 'September':
            $month_name = 'wrzesień';
            break;
        case 'October':
            $month_name = 'październik';
            break;
        case 'November':
            $month_name = 'listopad';
            break;
        case 'December':
            $month_name = 'grudzień';
            break;
    }
    return $month_name;
}