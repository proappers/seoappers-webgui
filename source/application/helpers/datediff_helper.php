<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('datediff'))
{
    function datediff($date1, $date2)
    {
		if(!$date1 | !$date2) {
			return false;
		}
		$date1 = strtotime($date1);
		$date2 = strtotime($date2);
		
		$diffdate = ($date2 - $date1);
		
		$std = floor($diffdate / 60);
		$min = ($std % 60);
		$std = ($std - $min);
		
		return array('hours' => $std, 'minutes' => $min);
	}
}
 