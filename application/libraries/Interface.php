<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Interface {
    private $cos_private_key;
	private $response = false;
	private $http_status = 0;
	
	public function __construct()
	{
		$CI =& get_instance();
		$this->cos_private_key = $CI->config->item('encryption_key');
		
	}


	
	public function makesign($params_array){
		if(!$params_array || !is_array($params_array)){
			return '';	
		}
		
		ksort($params_array);
		$sign_string = '';
		foreach($params_array as $key=>$value){
			$sign_string .=$value;
		}
		
		return md5($this->cos_private_key.$sign_string);
		
	}
	
	public function _curl($url,$params_array){
		if(!$params_array || !is_array($params_array)){
			$this->response = false;
		}
		
		$ch = curl_init();

        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_TIMEOUT,3);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER, TRUE); 
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($params_array));

		if(defined('CURLOPT_IPRESOLVE') && defined('CURL_IPRESOLVE_V4')){
			curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
		}

        $this->response = curl_exec($ch);
		
        $this->http_status = curl_getinfo($ch,CURLINFO_HTTP_CODE);

        curl_close($ch);

	}

	public function result(){
		return $this->response;
		
	}
	
	public  function result_array(){
		$res = array();
		if($this->response != false){
			if(!$res =  json_decode($this->response,true)){
				$res = array();
			}
		}
		return $res;
	}
}

