<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	 {
	 
	 parent::__construct();

	 $this->load->model('Dao_login_model');
	 
	 }

	public function index()
	{
		$this->load->view('login');
	}

	public function Registrarse(){
		$datos = array(
			'name' => $this->input->post('name'),
			'lastname' => $this->input->post('lastname'),
			'username' => $this->input->post('r_user'),
			'password' => $this->input->post('r_pass'),
			'email' => $this->input->post('email')
		);

		$res = $this->Dao_login_model->registerUser($datos);		
		$data['msj'] = ($res) ? 'ok' : 'error';
		$this->load->view('login', $data);

	}

	public function principal(){
		$datos = array(
			'username' => $this->input->post('user'),
			'password' => $this->input->post('password'),
		);
		$res = $this->Dao_login_model->loginUser($datos);

		if ($res) {
			$this->load->view('principal');
		} else {
			$data['msj'] = 'incorrect';
			$this->load->view('login', $data);
		}

	}


}
