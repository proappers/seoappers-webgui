<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if( ! function_exists('explode_date')) {
	function explode_date($date) {
		$date = explode(' ', $date);
		//list($year, $month, $day) = explode('-', $date[0]);
		list($hour, $minute, $second) = explode(':', $date[1]);
		
		return array(
			'hour' => $hour,
			'minute' => $minute,
			'second' => $second
		);
	}
}

if ( ! function_exists('datediff'))
{
    function datediff($date1, $date2)
    {
		if(!$date1 | !$date2) {
			return false;
		}
		$date1 = explode_date($date1);
		$date2 = explode_date($date2);
		
		$hour = $date2['hour'] - $date1['hour'];
		$minute = $date2['minute'] - $date1['minute'];
		$second = $date2['second'] - $date1['second'];
		
		return array(
			'hour' => $hour,
			'minute' => $minute,
			'second' => $second
		);
	}
}


 