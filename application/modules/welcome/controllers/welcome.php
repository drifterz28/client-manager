<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	public function index(){
		$data['module'] = 'welcome';
		$data['view_file'] = 'welcome';
		echo Modules::run('templates/main',$data);
	}
}
