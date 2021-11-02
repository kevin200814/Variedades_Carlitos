<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Inventario extends CI_Model{

public function obtener_inventario(){
    $this->db->join('TBL_CATEGORIA','TBL_CATEGORIA.ID_CATEGORIA = TBL_PRODUCTOS.ID_CATEGORIA');
    $query = $this->db->get('TBL_PRODUCTOS');
    return $query->result();
}

}