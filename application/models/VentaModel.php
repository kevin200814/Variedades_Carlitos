<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VentaModel extends CI_Model {

	public function obtener_inventario(){

        $this->db->join('TBL_PRODUCTOS P','I.ID_PRODUCTO = P.ID_PRODUCTO');
        $this->db->join('TBL_CATEGORIA C','P.ID_CATEGORIA = C.ID_CATEGORIA');
        $this->db->join('TBL_GENERO G','P.ID_GENERO = G.ID_GENERO');
        $this->db->join('TBL_TALLA T','P.ID_TALLA = T.ID_TALLA');
        $this->db->join('TBL_COLORES CO','P.ID_COLORES = CO.ID_COLORES');
        $this->db->join('TBL_MARCA M','P.ID_MARCA = M.ID_MARCA');
        $this->db->join('TBL_ENTRADA E','I.ID_ENTRADA = E.ID_ENTRADA');
        $this->db->where('I.STOCK_FINAL > 0');
        $query = $this->db->get('INTER_ENTRADA_SALIDA I');
        return $query->result();
    }


    public function getIntermediaV(){

       
        $query = $this->db->get('INTER_ENTRADA_SALIDA I');
        return $query->result();
    }


    public function getLista(){
        $query = $this->db->get('LISTA_VENTA V');
        return $query->result();
    }
    
    public function insertLista($data)
    {
        if ($this->db->insert('LISTA_VENTA',$data))
            return true;
        else
            return false;
    }


    public function updateLista($data)
    {   

        $this->db->set('TOTAL_FINAL',$data['TOTAL_FINAL']);
        $this->db->set('TOTAL_A_CANCELAR',$data['TOTAL_A_CANCELAR']);
        $this->db->set('CANTIDAD_VENDIDA',$data['CANTIDAD_VENDIDA']);
        $this->db->set('PRECIO_VENTA_FINAL',$data['PRECIO_VENTA_FINAL']);
        $this->db->where('ID_LISTA',$data['ID_LISTA']);
        $this->db->update('LISTA_VENTA');
    }

    public function eliminarProd($ID_LISTA)
    {
        $this->db->where('ID_LISTA', $ID_LISTA);
        $this->db->delete('LISTA_VENTA');
    }


    public function updateSalida($dataSalida)
    {   
        $this->db->set('FECHA_SALIDA',$dataSalida['FECHA_SALIDA']);
        $this->db->set('CANTIDAD_SALIDA',$dataSalida['CANTIDAD_SALIDA']);
        $this->db->set('VENTA_FINAL',$dataSalida['VENTA_FINAL']);
        $this->db->set('TOTAL_A_CANCELAR',$dataSalida['TOTAL_A_CANCELAR']);
        $this->db->set('TOTAL_FINAL',$dataSalida['TOTAL_FINAL']);
        $this->db->where('ID_SALIDA',$dataSalida['ID_SALIDA']);
        $this->db->update('TBL_SALIDA');
    }


    public function updateIntermedia($dataIntermedia)
    {   
        
        $this->db->set('STOCK_FINAL',$dataIntermedia['STOCK_FINAL']);
        $this->db->where('ID_PRODUCTO',$dataIntermedia['ID_PRODUCTO']);
        $this->db->update('INTER_ENTRADA_SALIDA');
    }


    public function eliminarLV()
    {
        # Equivalente a delete from mi_tabla
        $this->db->empty_table("LISTA_VENTA");
        # Equivalente a truncate table mi_tabla
        //$this->db->truncate_table("LISTA_PRODUCTOS");
    }
}