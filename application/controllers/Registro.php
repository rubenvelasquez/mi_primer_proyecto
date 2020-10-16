<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
	public function __construct(){
		parent::__construct();
		//llamos a helper
		$this->load->Helper(array('getmenu','url'));
	}


	public function index()
	{
		$data['menu'] = main_menu();;
		$this->load->view('registro',$data);
	}
	public function create(){
		$nombre = $this->input->post('nombres');
		$ap = $this->input->post('ap');
		$am = $this->input->post('am');
		$ci = $this->input->post('ci');
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		var_dump($nombre . $ap . $am . $ci . $email . $pass);
	}
}