<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservas extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('Dao_login_model');
    $this->load->model('Dao_reservas_model');
  }

  //
  public function index(){
  	$data['reservas'] = $this->Dao_reservas_model->getAllReservas();
  	$this->load->view('reservas', $data);
  }

  //
  public function crear_reserva(){

  	$user = $this->Dao_login_model->getUserByUsername($this->session->userdata('name'));

  	$data = array(
  		'user' => $user->name . " " . $user->lastname,
  		'cant' => $this->input->post('cant_per'),
  		'day' => $this->input->post('day'),
  		'hora' => $this->input->post('hora'). " " . $this->input->post('franja'),
  		'mesa' => rand(0,26)
  	);

  	$this->Dao_reservas_model->insertReserva($data);

  	$this->index();





  }





  
  
}
