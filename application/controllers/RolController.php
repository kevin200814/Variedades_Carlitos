<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RolController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Roles');
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Roles',
			'view' => 'roles/roles',
			'data_view' => array()
		);

		$data['roles'] = $this->Roles->obtener_roles();
		$this->load->view('template/main_view',$data);
	}

	public function nuevo_rol()
	{
		$data = array(
			'page_title' => 'Nuevo rol',
			'view' => 'roles/AddRol',
			'data_view' => array()
		);

		$this->load->view('template/main_view',$data);
	}

	public function insert_rol()
	{
		$data = array(
			'NOMBRE_ROL' => $this->input->post('nombre_rol')
		);

		$this->Roles->insert_rol($data);
		$this->index();
	}

	//para las vistas normales dejar el template/main_view
	//para los crud de actualizar dejar el template/main porque si no da conflicto el navbar con el css del crud
	public function editar_rol($ID_ROL)
	{
		$data = array(
			'page_title' => 'Editar rol',
			'view' => 'roles/AddRol',
			'data_view' => array()
		);

		$data['update'] = $this->Roles->obtener_rol($ID_ROL);
		$this->load->view('template/main',$data);
	}

	public function update_rol()
	{
		$rol = array(
			'NOMBRE_ROL' => $this->input->post('nombre_rol'),
			'ID_ROL' => $this->input->post('id_rol')
		);

		$this->Roles->editar_rol($rol);
		$this->index();
	}
//redireccionar al controlador porque si no se friega el diseño tanto del controlador como del navbar
	public function eliminar_rol($ID_ROL)
	{
		$this->Roles->delete_rol($ID_ROL);
		redirect('RolController/');
	}
}