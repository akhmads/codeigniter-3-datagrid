<?php

function active_menu( $target )
{
	$ci =& get_instance();
	$ci->load->helper('url');
	
	$mapper = [
		'tabulator' => ['tabulator'],
		'easyui' => ['easyui'],
		'bootstrap4' => ['bootstrap4','bootstrap4/index'],
	];
	
	$uri = uri_string();
	$group = isset($mapper[$target]) ? $mapper[$target] : [];
	if( count($group) > 0 )
	{
		foreach( $group as $route )
		{
			if( strpos($route,'*') === false )
			{
				if( $route === $uri )
				{
					return 'active';
				}
			}
			else
			{
				if( preg_match('/^'.$route.'/i', $uri) )
				{
					return 'active';
				}
			}
		}
	}
}