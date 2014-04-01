<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Management extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->view('management/management-main');
	}
	
	public function members()
	{
		
		$this->load->view('management/management-members');
	}
	
	public function coswork_upload(){
		
		$this->load->view('management/management-coswork-upload');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */