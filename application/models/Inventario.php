<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Inventario extends CI_Model{

    public function obtener_inventario(){

        $this->db->join('TBL_CATEGORIA C','C.ID_CATEGORIA = P.ID_CATEGORIA');
        $this->db->join('TBL_GENERO G','C.ID_GENERO = G.ID_GENERO');
        $this->db->join('TBL_TALLA T','C.ID_TALLA = T.ID_TALLA');
        $this->db->join('TBL_COLORES CO','C.ID_COLORES = CO.ID_COLORES');
        $this->db->join('TBL_MARCA M','C.ID_TALLA = M.ID_MARCA');
        $query = $this->db->get('TBL_PRODUCTOS P');
        return $query->result();
    }

}