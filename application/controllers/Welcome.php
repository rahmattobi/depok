<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function hello()
	{
		echo"Hello There, im trying";
	}

	public function tesparameter($param1=null, $param2='')
	{
		echo"ini parameter 1 = ".$param1.", ini parameter 2 = ".$param2;
	}
}
