<?php
function schedule_return_months($days = array()){

    if (empty($days)) {
        $days = schedule_return_days();
        if (empty($days)) return null;
    }

    $format = "Y-m-d H:i:s";
    $first_date = DateTime::createFromFormat($format, $days[0]);

    $days_by_months = array();
    $cur_month = $first_date->format("m");
    $cur_year = $first_date->format("Y");

    foreach($days as $day){
        $cur_month_key = $cur_month . "," . $cur_year;
        
        $day_date = DateTime::createFromFormat($format, $day);
        $day_month = $day_date->format("m");

        // If day is not from current month, change month to new current month
        if ($day_month !== $cur_month) $cur_month = $day_month;
        
        // If no such a month in array, push it in and be sure, month is an array
        if (empty($days_by_months[$cur_month_key])) {
            $days_by_months[$cur_month_key] = array();
        }

        // Push date to month array
        array_push($days_by_months[$cur_month_key], $day);
    }

    return $days_by_months;
}