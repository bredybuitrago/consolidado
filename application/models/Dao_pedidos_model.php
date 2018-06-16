<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dao_pedidos_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }


  //
  public function insertPedido($data){
  	$query = $this->db->insert('pedidos', $data);

		if ($query) {
			return true;
		}else{
			return false;
		}
  }

  //trae todas las reservas
  public function getAllPedidos(){
    $logueado = $this->session->userdata('nombre') . " " .  $this->session->userdata('lastname');
  	$query = $this->db->get_where('pedidos', array('user' => $logueado));
  	return $query->result();
  }

  
}
