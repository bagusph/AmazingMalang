<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('onlyLevel'))
{
	function onlyLevel($id_level)
	{
		$ci=& get_instance();
		$level = $ci->session->userdata('logged_in')['fk_level'];

		if ($level == $id_level) {
			return true;
		}else{
			return false;
		}
	}  
}
if ( ! function_exists('isLoggedin'))
{
	function isLoggedin()
	{
		$ci=& get_instance();
		$level = $ci->session->userdata('logged_in');

		if ($level != null) {
			return true;
		}else{
			return false;
		}
	}  
}