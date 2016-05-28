<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if ( !function_exists('draw_calendar') )
{
    /* draws a calendar */
    function draw_calendar($month, $year, $events=array()){
        $time = mktime(0, 0, 0, $month, 1, $year);
        $month_str = date('F', $time);
        $month_picker = sprintf('%02d-%d', $month, $year);
        
        /* draw table */
        $calendar = "
        <div class='fc-toolbar'>
            <div class='fc-left'><h2>$month_str $year</h2></div>
            <div class='fc-right'>
                <div class='fc-button-group'>
                    <button type='submit' class='fc-prev-button fc-button fc-state-default fc-corner-left' name='btn-prev' value='1'><span class='fc-icon fc-icon-left-single-arrow'></span></button>
                    <button type='submit' class='fc-next-button fc-button fc-state-default' name='btn-current' value='1'><span>Current</span></button>
                    <button type='submit' class='fc-next-button fc-button fc-state-default fc-corner-right' name='btn-next' value='1'><span class='fc-icon fc-icon-right-single-arrow'></span></button>
                </div>
            </div>
            <div class='fc-center' style='vertical-align:middle;'><input type='text' id='monthpicker' class='monthpicker-input form-control' name='monthpicker' value='$month_picker' style='width:60%;'/><button type='submit' class='fc-button fc-state-default' name='btn-select' value='1'><span>Select</span></button></div>
            <div class='fc-clear'></div>
        </div>";
        
        $calendar .= '<table cellpadding="0" cellspacing="0" class="calendar">';

        /* table headings */
        $headings = array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
        $calendar.= '<thead><tr class="calendar-row"><th class="calendar-day-head">'.implode('</th><th class="calendar-day-head">',$headings).'</th></tr></thead>';

        /* days and weeks vars now ... */
        $running_day = date('w', $time);
        $days_in_month = date('t', $time);
        $days_in_this_week = 1;
        $day_counter = 0;
        $dates_array = array();

        /* row for week one */
        $calendar.= '<tbody><tr class="calendar-row">';

        /* print "blank" days until the first of the current week */
        for($x = 0; $x < $running_day; $x++)
        {
            $calendar.= '<td class="calendar-day-np"> </td>';
            $days_in_this_week++;
        }

        /* keep going with days.... */
        for($list_day = 1; $list_day <= $days_in_month; $list_day++)
        {
            $date_time = mktime(0, 0, 0, $month, $list_day, $year);
            $date_str = date('Y-m-d', $date_time);
            
            //prepare image
            $img = '';
            $data_index = 0;
            if(isset($events[$date_str]))
            {
                $evt = $events[$date_str];
                $data_index = $evt->id;
                $img = "<img src='" . thumbnail($evt->image, 80, 80) . "' title='" . $evt->title . " - $" . $evt->price . "'/>";   
            }
            
            $calendar.= "<td class='calendar-day text-center' data-time='$date_time' data-index='$data_index'>";
            /* add in the day number */
            $calendar.= '<div class="day-number">'.$list_day.'</div>' . $img;

            /** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
            //$calendar.= str_repeat('<p> </p>',2);
                
            $calendar.= '</td>';
            if($running_day == 6)
            {
                $calendar.= '</tr>';
                if(($day_counter+1) != $days_in_month)
                {
                    $calendar.= '<tr class="calendar-row">';
                }
                $running_day = -1;
                $days_in_this_week = 0;
            }
            
            $days_in_this_week++; $running_day++; $day_counter++;
        }

        /* finish the rest of the days in the week */
        if($days_in_this_week > 1 && $days_in_this_week < 8)
        {
            for($x = 1; $x <= (8 - $days_in_this_week); $x++)
            {
                $calendar.= '<td class="calendar-day-np"> </td>';
            }
        }

        /* final row */
        $calendar.= '</tr></tbody>';

        /* end the table */
        $calendar.= '</table>';
        
        /* all done, return result */
        return $calendar;
    }
}