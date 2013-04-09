<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_HybridAuth_Index extends Controller {

	public function action_install()
	{
		require_once HYBRIDAUTH_PATH . 'hybridauth/install.php';
	}

	public function action_endpoint()
	{
		require_once HYBRIDAUTH_PATH . 'hybridauth/index.php';
	}
}
