<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Inventario extends CI_Model{

    public function obtener_inventario(){

        $this->db->join('TBL_CATEGORIA C','P.ID_CATEGORIA = C.ID_CATEGORIA');
        $this->db->join('TBL_GENERO G','P.ID_GENERO = G.ID_GENERO');
        $this->db->join('TBL_TALLA T','P.ID_TALLA = T.ID_TALLA');
        $this->db->join('TBL_COLORES CO','P.ID_COLORES = CO.ID_COLORES');
        $this->db->join('TBL_MARCA M','P.ID_MARCA = M.ID_MARCA');
        $query = $this->db->get('TBL_PRODUCTOS P');
        return $query->result();
    }
 


    public function getLista(){

        
        $query = $this->db->get('LISTA_PRODUCTOS');
        return $query->result();
    }

    public function allStock(){

        
        $query = $this->db->get('TBL_ESTADO_STOCK');
        return $query->result();
    }
 
    public function getintermedia(){   
        $this->db->join('TBL_ESTADO_STOCK S','I.ID_ESTADO_STOCK = S.ID_ESTADO_STOCK');
        $this->db->join('TBL_PRODUCTOS P','I.ID_PRODUCTO = P.ID_PRODUCTO');
        $this->db->join('TBL_CATEGORIA C','P.ID_CATEGORIA = C.ID_CATEGORIA');
        $this->db->join('TBL_GENERO G','P.ID_GENERO = G.ID_GENERO');
        $this->db->join('TBL_TALLA T','P.ID_TALLA = T.ID_TALLA');
        $this->db->join('TBL_COLORES CO','P.ID_COLORES = CO.ID_COLORES');
        $this->db->join('TBL_MARCA M','P.ID_TALLA = M.ID_MARCA');
        $this->db->join('TBL_SALIDA SA','I.ID_SALIDA = SA.ID_SALIDA');
        $this->db->join('TBL_ENTRADA E','I.ID_ENTRADA = E.ID_ENTRADA');
        $query = $this->db->get('INTER_ENTRADA_SALIDA I');
        return $query->result();
    }


    

    public function getEntrada($ID_ENTRADA)
    {
        $this->db->select('*');
        $this->db->join('TBL_ESTADO_STOCK S','I.ID_ESTADO_STOCK = S.ID_ESTADO_STOCK');
        $this->db->join('TBL_PRODUCTOS P','I.ID_PRODUCTO = P.ID_PRODUCTO');
        $this->db->join('TBL_CATEGORIA C','P.ID_CATEGORIA = C.ID_CATEGORIA');
        $this->db->join('TBL_GENERO G','P.ID_GENERO = G.ID_GENERO');
        $this->db->join('TBL_TALLA T','P.ID_TALLA = T.ID_TALLA');
        $this->db->join('TBL_COLORES CO','P.ID_COLORES = CO.ID_COLORES');
        $this->db->join('TBL_MARCA M','P.ID_TALLA = M.ID_MARCA');
        $this->db->from('INTER_ENTRADA_SALIDA I');
        $this->db->where('ID_ENTRADA =' .$ID_ENTRADA);
        $query = $this->db->get();
        return  $query->row();
    }
 
    public function insertLista($data)
    {
        if ($this->db->insert('LISTA_PRODUCTOS',$data))
            return true;
        else
            return false;
    }

    public function updateLista($data)
    {   
       
        $this->db->set('TOTAL_DOCENA',$data['TOTAL_DOCENA']);
        $this->db->set('CANTIDAD',$data['CANTIDAD']);
        $this->db->set('UNITARIO',$data['UNITARIO']);
        $this->db->where('ID_LISTA',$data['ID_LISTA']);
        $this->db->update('LISTA_PRODUCTOS');
    }


    public function eliminarProd($ID_LISTA)
    {
        $this->db->where('ID_LISTA', $ID_LISTA);
        $this->db->delete('LISTA_PRODUCTOS');
    }

    /*public function obtenerdato()
    {
        $this->db->select('MAX(ID_LISTA)');
        $query = $this->db->get('LISTA_PRODUCTOS');
        return $query->row();

    }*/

    public function insertEntrada($data)
    {
        $this->db->insert("TBL_ENTRADA", $data);
        $last_id = $this->db->insert_id();
        return $last_id;
    }


    public function insertSalida($data)
    {
        $this->db->insert("TBL_SALIDA", $data);
        $last_id = $this->db->insert_id();
        return $last_id;
    }


    public function insertIntermedia($data)
    {
        $this->db->insert("INTER_ENTRADA_SALIDA", $data);
        $last_id = $this->db->insert_id();
        return $last_id;
    }

    public function insertMovimiento($data)
    {
        $this->db->insert("VEN_MOVIMIENTOS", $data);
        $last_id = $this->db->insert_id();
        return $last_id;
    }

    public function eliminarLP()
    {
        # Equivalente a delete from mi_tabla
        $this->db->empty_table("LISTA_PRODUCTOS");
        # Equivalente a truncate table mi_tabla
        //$this->db->truncate_table("LISTA_PRODUCTOS");
    }

    

} 