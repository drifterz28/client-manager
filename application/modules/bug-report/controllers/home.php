<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller {
	
    function __construct(){
        // Call the Model constructor
        parent::__construct();
    }
	public function index(){
			$this->load->model('products');
			$data['products'] = $this->products->get_products();
		$data['title']='Automation Excellence for your Store';
		echo Modules::run('templates/main',$data);
	}
}