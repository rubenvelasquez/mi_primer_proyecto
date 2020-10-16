<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		//llamos a helper
		$this->load->Helper(array('getmenu','url'));
	}


	public function index()
	{
		$data['menu'] = main_menu();;
		$this->load->view('login',$data);
	}
}
