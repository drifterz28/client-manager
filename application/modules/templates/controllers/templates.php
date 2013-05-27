<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Templates extends MX_Controller {

	function __construct(){
        // Call the Model constructor
        parent::__construct();
		if($_SERVER['REMOTE_ADDR'] === '24.20.27.37'){
			$this->output->enable_profiler(TRUE);
		}
		
    }
	
	public function index($data = null){
		$this->load->view('head',$data);
		$this->load->view('header',$data);
		$this->load->view('master',$data);
		$this->load->view('footer',$data);
		//$this->output->cache(300);
	}
	
	public function main($data = null){
		$this->load->view('head',$data);
		$this->load->view('header',$data);
		$this->load->view('master',$data);
		$this->load->view('footer',$data);
		//$this->output->cache(300);
	}
	
	public function email($data = null){
		$this->load->view('email',$data);
		//$this->output->cache(300);
	}
}