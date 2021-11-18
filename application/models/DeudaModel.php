<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeudaModel extends CI_Model {

	public function getMovimientos()
	{	

		/*$query = $this->db->get('VEN_MOVIMIENTOS');*/
		$this->db->select('VEN_MOVIMIENTOS.COD_DEUDA,VEN_MOVIMIENTOS.ID_PROVEEDOR, TBL_PROVEEDOR.PROVEEDOR_PRODUCTO,VEN_MOVIMIENTOS.FECHA_MOVIMIENTO,VEN_MOVIMIENTOS.DEUDA_PROVEEDOR,VEN_MOVIMIENTOS.TOTAL_A_PAGAR, VEN_MOVIMIENTOS.ABONO_PROVEEDOR,TBL_ESTADO_PAGO.ESTADO_PAGO,VEN_MOVIMIENTOS.UPDATE_USUARIO');
		$this->db->from('VEN_MOVIMIENTOS');
		$this->db->join("TBL_ESTADO_PAGO","TBL_ESTADO_PAGO.ID_ESTADO_PAGO = VEN_MOVIMIENTOS.ID_ESTADO_PAGO");
		$this->db->join("TBL_PROVEEDOR","TBL_PROVEEDOR.ID_PROVEEDOR = VEN_MOVIMIENTOS.ID_PROVEEDOR");
		$this->db->group_by('VEN_MOVIMIENTOS.COD_DEUDA,TBL_PROVEEDOR.PROVEEDOR_PRODUCTO,VEN_MOVIMIENTOS.ABONO_PROVEEDOR,VEN_MOVIMIENTOS.ID_PROVEEDOR,VEN_MOVIMIENTOS.FECHA_MOVIMIENTO,VEN_MOVIMIENTOS.DEUDA_PROVEEDOR,VEN_MOVIMIENTOS.TOTAL_A_PAGAR,TBL_ESTADO_PAGO.ESTADO_PAGO,VEN_MOVIMIENTOS.UPDATE_USUARIO');
		$query = $this->db->get();
		return $query->result();
	}
 
	public function obtenerMovimiento($COD_DEUDA)
	{
		$this->db->select('*');
		$this->db->from('VEN_MOVIMIENTOS');
		$this->db->where('COD_DEUDA =' .$COD_DEUDA);
		$query = $this->db->get();
		return  $query->row();
	}

	public function obtenerDeuda($COD_DEUDA)
	{
		$this->db->select('VEN_MOVIMIENTOS.ID_MOVIMIENTO,
			VEN_MOVIMIENTOS.COD_DEUDA,
			TBL_PRODUCTOS.NOMBRE_PRODUCTO,
			TBL_TALLA.TALLA,
			TBL_COLORES.NOMBRE_COLOR,
			VEN_MOVIMIENTOS.ABONO_PROVEEDOR,
			TBL_GENERO.TIPO_GENERO,
			TBL_MARCA.NOMBRE_MARCA,
			TBL_PROVEEDOR.PROVEEDOR_PRODUCTO,
			VEN_MOVIMIENTOS.FECHA_MOVIMIENTO,
			VEN_MOVIMIENTOS.DEUDA_PROVEEDOR,
			VEN_MOVIMIENTOS.ABONO_PROVEEDOR,
			VEN_MOVIMIENTOS.TOTAL_A_PAGAR,
			TBL_ESTADO_PAGO.ESTADO_PAGO');
		$this->db->from('VEN_MOVIMIENTOS');
		$this->db->join("TBL_PRODUCTOS","TBL_PRODUCTOS.ID_PRODUCTO = VEN_MOVIMIENTOS.ID_PRODUCTO");
		$this->db->join("TBL_PROVEEDOR","TBL_PROVEEDOR.ID_PROVEEDOR = VEN_MOVIMIENTOS.ID_PROVEEDOR");
		$this->db->join("TBL_ESTADO_PAGO","TBL_ESTADO_PAGO.ID_ESTADO_PAGO = VEN_MOVIMIENTOS.ID_ESTADO_PAGO");

		$this->db->join("TBL_TALLA","TBL_TALLA.ID_TALLA = TBL_PRODUCTOS.ID_TALLA");
		$this->db->join("TBL_COLORES","TBL_COLORES.ID_COLORES = TBL_PRODUCTOS.ID_COLORES");
		$this->db->join("TBL_GENERO","TBL_GENERO.ID_GENERO = TBL_PRODUCTOS.ID_GENERO");
		$this->db->join("TBL_MARCA","TBL_MARCA.ID_MARCA = TBL_PRODUCTOS.ID_MARCA");


		$this->db->where('COD_DEUDA =' .$COD_DEUDA);
		$query = $this->db->get();
		return  $query->result();
	}

	public function updateCategoria($categoria)
	{
		$this->db->set('TIPO_CATEGORIA',$categoria['TIPO_CATEGORIA']);
		$this->db->where('ID_CATEGORIA',$categoria['ID_CATEGORIA']);
		$this->db->update('TBL_CATEGORIA');
	}

	public function updateAbono($abono)
	{	
		$this->db->set('TOTAL_A_PAGAR',$abono['TOTAL_A_PAGAR']);
		$this->db->set('ABONO_PROVEEDOR',$abono['ABONO_PROVEEDOR']);
		$this->db->set('ID_ESTADO_PAGO',$abono['ESTADO_STOCK']);
		$this->db->where('COD_DEUDA',$abono['COD_DEUDA']);
		
		$this->db->update('VEN_MOVIMIENTOS');
	}
}