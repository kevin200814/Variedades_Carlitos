<?php
defined('BASEPATH') or exit('No direct script access allowed');


class MyProfile extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario');
		$this->load->model('Roles');
	}

	//para las vistas normales dejar el template/main_view
	//para los crud de actualizar dejar el template/main porque si no da conflicto el navbar con el css del crud
	public function setting_user($ID_USUARIO)
	{
		$data = array(
			'page_title' => 'Editar usuario',
			'view' => 'Perfil/profile',
			'data_view' => array()
		);
		$data['roles'] = $this->Roles->obtener_roles();
		$data['update'] = $this->Usuario->obtener_usuario($ID_USUARIO);
		$this->load->view('template/main_view', $data);
	}

    public function about_me($ID_USUARIO)
	{
		$data = array(
			'page_title' => 'Editar usuario',
			'view' => 'Perfil/about_me',
			'data_view' => array()
		);
		$data['roles'] = $this->Roles->obtener_roles();
		$data['update'] = $this->Usuario->obtener_usuario($ID_USUARIO);
		$this->load->view('template/main_view', $data);
	}

	public function update_my_profile()
	{
		$originalDate = $this->input->post('fecha_cambios');
		$timestamp = strtotime($originalDate);
		$newDate = date("Y-m-d", $timestamp);

		$usuario = array(
			'NOMBRE_USUARIO' => $this->input->post('nombre'),
			'NICK_USUARIO' => $this->input->post('nick'),
			'CORREO_USUARIO' => $this->input->post('correo'),
			'CONTRASENIA_USUARIO' => $this->input->post('contrasenia'),
			'FECHA_CAMBIOS' => $newDate,
			'ID_ROL' => $this->input->post('id_rol'),
			'ID_USUARIO' => $this->input->post('id_usuario')
		);

		$this->Usuario->editar_usuario($usuario);
		redirect('LoginController/inicio');
	}
	
}