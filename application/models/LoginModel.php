<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model
{


	public function getUser($usuario,$contraseña){
	 	$this->db->where('NICK_USUARIO',$usuario);
		$this->db->where('CONTRASENIA_USUARIO',$contraseña);
		$login = $this->db->get('TBL_USUARIO',1);

		return $login;    

	}  

} 

?>