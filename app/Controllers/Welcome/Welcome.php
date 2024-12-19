<?php namespace App\Controllers\Welcome;

class Welcome extends \CI_Controller {

	public function __construct(){

		parent::__construct();
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
