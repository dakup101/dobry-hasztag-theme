<?php
function get_month_in_pl($date){
    $month = $date->format('F');
    $month_name = '';
    switch ($month) {
        case 'January':
            $month_name = 'stycznia';
            break;
        case 'February':
            $month_name = 'lutego';
            break;
        case 'March':
            $month_name = 'marca';
            break;
        case 'April':
            $month_name = 'kwietnia';
            break;
        case 'May':
            $month_name = 'maja';
            break;
        case 'June':
            $month_name = 'czerwca';
            break;
        case 'July':
            $month_name = 'lipca';
            break;
        case 'August':
            $month_name = 'sierpnia';
            break;
        case 'September':
            $month_name = 'września';
            break;
        case 'October':
            $month_name = 'października';
            break;
        case 'November':
            $month_name = 'listopada';
            break;
        case 'December':
            $month_name = 'grudnia';
            break;
    }
    return $month_name;
}