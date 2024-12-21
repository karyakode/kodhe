<?php namespace App\Controllers;

class Welcome extends \CI_Controller {

	public function __construct(){

		parent::__construct();
	}

	public function index()
	{
		$this->blade->render('welcome');
	}
}
