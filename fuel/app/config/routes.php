<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	'controle' => 'cpanel/cpanel_index',
	'controle/categoria' => 'cpanel/cpanel_category',
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
