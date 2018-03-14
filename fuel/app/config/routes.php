<?php
return array(
	'_root_'				=>	'welcome/index',  // The default route
	'_404_'					=>	'welcome/404',    // The main 404 route

	/**
	 * Control Panel Views
	 */
		'controle'				=>	'cpanel/cpanel_index',
		'controle/categoria'	=>	'cpanel/cpanel_category',
		'controle/historias'	=>	'cpanel/cpanel_historia',
		'controle/addHistoria'	=>	'cpanel/add_historia',


		/**
		 * Control Panel intern functions
		 */
			'addCategory'			=>	'cpanel/add_category',
			'deleteCategory'		=>	'cpanel/delete_category', 
			'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
