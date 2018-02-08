<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	'teste' => 'cpanel/cpanel_index',
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
