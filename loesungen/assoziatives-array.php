<?php

$month['Januar'] = 31;
$month['Februar'] = 28;
$month['März'] = 31;
$month['April'] = 30;
$month['Mai'] = 31;
$month['Juni'] = 30;
$month['Juli'] = 31;
$month['August'] = 31;
$month['September'] = 30;
$month['Oktober'] = 31;
$month['November'] = 30;
$month['Dezember'] = 31;

foreach($month as $name => $days) {

    echo 'Der Monat '.$name.' hat '.$days.' Tage.<br>';
}