<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends CI_Controller {


	public function userprofile()
	{
		
		$this->load->view('setting/user-profile');
	}
	
	public function account_settings(){
		$this->load->view('setting/account-settings');
	}
	
	public function societiesprofile()
	{
		
		$this->load->view('setting/societies-profile');
	}
}