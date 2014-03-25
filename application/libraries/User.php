<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_User {
	private $CI;
	private $userinterface_domain;
	
	public function __construct(){
		$this->CI = &  get_instance();
		$this->CI->load->library('interface');
		$this->userinterface_domain = $this->CI->config->item('userinterface_domain');
	}
	
	//注册
	//参数  email，nickname，password，position
	public function do_register($params_array){

		$params_array['sign'] = $this->CI->interface->makesign($params_array);

		$this->CI->interface->_curl($this->userinterface_domain.'register.php',$params_array);
		return $this->CI->interface->result_array();
	}
	
	//登陆
	//参数 email，password，position
	public function do_login($params_array){

		$params_array['sign'] = $this->CI->interface->makesign($params_array);

		$this->CI->interface->_curl($this->userinterface_domain.'login.php',$params_array);
		return $this->CI->interface->result_array();
	}
	
	//获取用户信息
	//参数 P00001(token，为了前端隐藏字段含义)， position
	public function get_userinfo($params_array){
		$params_array['sign'] = $this->CI->interface->makesign($params_array);

		$this->CI->interface->_curl($this->userinterface_domain.'userinfo.php',$params_array);
		return $this->CI->interface->result_array();
	}
}

