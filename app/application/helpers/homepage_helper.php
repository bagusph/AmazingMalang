<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('getConfigPage'))
{
	function getConfigPage($domain)
	{
		$ci=& get_instance();
		$ci->db->where('subdomain',$domain);
		$query = $ci->db->get('config_page');
		return $query->row(0);
	}  
}