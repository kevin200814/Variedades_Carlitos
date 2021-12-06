<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Model {
 

	public function obtener_roles()
	{	
		$query = $this->db->get('TBL_ROL');
		return $query->result();
	}

	public function insert_rol($data)
	{
		if ($this->db->insert('TBL_ROL',$data))
			return true;
		else
			return false;
	}

	public function delete_rol($id_rol)
	{
		$this->db->where('ID_ROL', $id_rol);
		$this->db->delete('TBL_ROL');
	}

	public function obtener_rol($id_rol)
	{
		$this->db->select('*');
		$this->db->from('TBL_ROL');
		$this->db->where('ID_ROL =' .$id_rol);
		$query = $this->db->get();
		return  $query->row()  ;
	}

	public function editar_rol($rol)
	{
		$this->db->set('NOMBRE_ROL',$rol['NOMBRE_ROL']);
		$this->db->set('CREAR',$rol['CREAR']);
		$this->db->set('ACTUALIZAR',$rol['ACTUALIZAR']);
		$this->db->set('ELIMINAR',$rol['ELIMINAR']);
		$this->db->where('ID_ROL',$rol['ID_ROL']);
		$this->db->update('TBL_ROL');
	}
}