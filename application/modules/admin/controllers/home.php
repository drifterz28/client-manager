<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller {
	
    function __construct(){
        // Call the Model constructor
        parent::__construct();
    }
	function index(){
		echo 'hello';
		//$this->load->model('products');
		//$data['products'] = $this->products->get_products();
		$data['title']='Automation Excellence for your Store';
		//echo Modules::run('templates/main',$data);
	}
}