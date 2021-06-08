<?php

function active_menu( $target )
{
	$ci =& get_instance();
	$ci->load->helper('url');
	
	$mapper = [
		'tabulator' => ['tabulator*'],
		'easyui' => ['easyui*'],
	];
	
	$normalize = [];
	foreach( $mapper as $key => $val )
	{
		if( is_array($val) AND count($val) > 0 )
		{
			foreach($val as $route)
			{
				$normalize[$route] = $key;
			}
		}
	}
	
	$uri = uri_string();
	if( preg_match('/^'.$target.'/i', $uri) )
	{
		return 'active';
	}
}

echo active_menu('easyui');