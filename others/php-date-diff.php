<?php

//Our dates
$date1 = "2014-03-01";
$date2 = "2014-03-03";
 
//Convert them to timestamps.
$date1Timestamp = strtotime($date1);
$date2Timestamp = strtotime($date2);
 
//Calculate the difference.
$difference = $date2Timestamp - $date1Timestamp;
 
$days = floor($difference / (60*60*24) );
 
echo $days+1;