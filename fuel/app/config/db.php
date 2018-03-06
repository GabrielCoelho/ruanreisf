<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
    'default' => array(
		'connection'  => array(
            'hostname' => 'localhost',
            'port' => '3306',
            'database' => 'ruanreis-dev',
            'username' => 'gabriel',
            'password' => 'admin123',
            'persistent' => false,
            'compress'   => true,


			// 'dsn'        => 'mysql:host=127.0.0.1:3306;dbname=ruanreis-dev',
			// 'username'   => 'root',
			// 'password'   => 'batataadmin',
		),
	),
);
