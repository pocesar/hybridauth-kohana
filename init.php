<?php

define('HYBRIDAUTH_PATH', realpath(__DIR__.'/vendor/').DIRECTORY_SEPARATOR);

if (Kohana::$environment === Kohana::DEVELOPMENT)
{
	Route::set('hybridauth-install', 'hybridauth/install')
	->defaults(array(
		'directory' => 'HybridAuth',
		'controller' => 'Index',
		'action' => 'install',
	));
}

Route::set('hybridauth-endpoint', 'loginauth')
	->defaults(array(
		'directory' => 'HybridAuth',
		'controller' => 'Index',
		'action' => 'endpoint',
	));

