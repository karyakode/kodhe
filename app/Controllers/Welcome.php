<?php namespace App\Controllers;

class Welcome extends \CI_Controller {

	public function __construct(){

		parent::__construct();
	}

	public function index()
	{
		$data['name'] = kodhe('setup')->get('App:name');
		$data['version'] = kodhe('setup')->get('App:version');
		$data['ci_version'] = CI_VERSION;
		$data['description'] = kodhe('setup')->get('App:description');
		
		$this->blade->render('welcome', $data);
	}
}
