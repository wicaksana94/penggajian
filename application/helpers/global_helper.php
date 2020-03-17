<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('rupiah')) {
	function to_rupiah($input_number){
	$your_rupiah = number_format($input_number,0,',','.');
	return 'Rp ' . $your_rupiah;
	}
}

if (!function_exists('debug')) {
	function debug($array){
	echo "<pre>";
	print_r ($array);
	echo "</pre>";
	die();
	}
}

?>