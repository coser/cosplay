<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {


	public function login()
	{
		
		$this->load->view('account/login');
	}
	
	public function register()
	{
		
		$this->load->view('account/register');
	}
}