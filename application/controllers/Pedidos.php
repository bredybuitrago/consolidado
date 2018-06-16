<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('Dao_pedidos_model');
  }
  
  //
  public function index(){
  	$data['pedidos'] = $this->Dao_pedidos_model->getAllPedidos();
  	$this->load->view('pedidos', $data);
  }

  //
  public function crearPedido(){
  	$data = array(
  		'user' =>  $this->session->userdata('nombre') . " " .  $this->session->userdata('lastname'),
  		'a_nombre' => $this->input->post('mdl_nombre'),
  		'email' => $this->input->post('mdl_email'),
  		'direccion' => $this->input->post('mdl_direccion'),
  		'contacto' => $this->input->post('mdl_contacto'),
  		'costo' => $this->input->post('mdl_total'),
  		'estimado' => rand(0,45)
  	);
  	$this->Dao_pedidos_model->insertPedido($data);

  	$this->index();


  }





  
}