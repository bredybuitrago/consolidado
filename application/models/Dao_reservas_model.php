<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dao_reservas_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }


  //
  public function insertReserva($data){
  	$query = $this->db->insert('reservas', $data);

		if ($query) {
			return true;
		}else{
			return false;
		}
  }

  //trae todas las reservas
  public function getAllReservas(){
  	$query = $this->db->get('reservas');
  	return $query->result();
  }

  
}
