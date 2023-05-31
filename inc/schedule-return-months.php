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
        $day_date = DateTime::createFromFormat($format, $day);
        $day_month = $day_date->format("m");
        if ($day_month !== $cur_month) $cur_month = $day_month;

        $buffor_date = new DateTime("$cur_year-$cur_month-01");
        
        $firstDay = $buffor_date->format('Y-m-01');
        $lastDay = $buffor_date->format('Y-m-t');
        
        $cur_month_key = $cur_month . "," . $cur_year;

        if (empty($days_by_months[$cur_month_key])) {
            $days_by_months[$cur_month_key] = array($firstDay, $lastDay);
        }
        else {
            continue;
        }
    }

    return $days_by_months;
}