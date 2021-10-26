<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChartModel extends CI_Model {

	public function getTotal()
	{

		$this->db->select("sum(ABONO_PROVEEDOR) AS AbonoTotalProveedor, sum(DEUDA_PROVEEDOR) AS DeudaTotalProveedor");
	    $this->db->from('VEN_MOVIMIENTOS');
	    $this->db->where("ID_ESTADO_PAGO = 2");

	    $query = $this->db->get();
	    return $query->result();
	}

	public function getGrafica()
	{
		$this->db->select("DATENAME(month,  MAX(FECHA_MOVIMIENTO)) + ' ' + CONVERT(nvarchar(4), YEAR(FECHA_MOVIMIENTO)) AS Meses, sum(ABONO_PROVEEDOR) AS AbonoProveedor, sum(DEUDA_PROVEEDOR) AS DeudaProveedor");
	    $this->db->from('VEN_MOVIMIENTOS');
	    $this->db->where("ID_ESTADO_PAGO = 2");
	    $this->db->group_by("DATENAME(month, FECHA_MOVIMIENTO), YEAR(FECHA_MOVIMIENTO)");

	    $query = $this->db->get();
	    return $query->result();
	    /*$resultados = $this->db->get();
	    return $resultados->result();*/

	}

	

}