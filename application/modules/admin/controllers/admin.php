<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller {
	
    function __construct(){
        // Call the Model constructor
        parent::__construct();
    }
	public function index(){
		$data['title']='Automation Excellence for your Store';
		echo Modules::run('templates/main',$data);
	}
}