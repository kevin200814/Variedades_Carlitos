<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Inventario extends CI_Model{

public function obtener_inventario(){
    $query = $this->db->get('TBL_PRODUCTOS');
    return $query->result();
}

}