<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class UsuarioController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Usuario');
		$this->load->model('Roles');
	}
	public function index()
	{
		$data = array(
			'page_title' => 'Usuario',
			'view' => 'usuario/usuario',
			'data_view' => array()
		);

		$data['usuario'] = $this->Usuario->obtener_usuarios();
		$data['roles'] = $this->Roles->obtener_roles();
		$this->load->view('template/main_view',$data);
	}
	public function nuevo_usuario()
	{
		$data = array(
			'page_title' => 'Nuevo usuario',
			'view' => 'usuario/AddUsuario',
			'data_view' => array()
		);

		$data['roles'] = $this->Roles->obtener_roles();
		$this->load->view('template/main_view',$data);
	}
	public function insert_usuario()
	{
		$data = array(
			'NOMBRE_USUARIO' => $this->input->post('nombre'),
			'NICK_USUARIO' => $this->input->post('nick'),
			'CORREO_USUARIO' => $this->input->post('correo'),
			'CONTRASENIA_USUARIO' => $this->input->post('contrasenia'),
			'FECHA_CAMBIOS' => $this->input->post('fecha_cambios'),
			'ID_ROL' => $this->input->post('id_rol')
		);

		$this->Usuario->insert_usuario($data);
		$this->index();
	}
	//para las vistas normales dejar el template/main_view
	//para los crud de actualizar dejar el template/main porque si no da conflicto el navbar con el css del crud
	public function editar_usuario($ID_USUARIO)
	{
		$data = array(
			'page_title' => 'Editar usuario',
			'view' => 'usuario/Addusuario',
			'data_view' => array()
		);
		$data['roles'] = $this->Roles->obtener_roles();
		$data['update'] = $this->Usuario->obtener_usuario($ID_USUARIO);
		$this->load->view('template/main_view',$data);
	}

	public function update_usuario()
	{
		$usuario = array(
			'NOMBRE_USUARIO' => $this->input->post('nombre'),
			'NICK_USUARIO' => $this->input->post('nick'),
			'CORREO_USUARIO' => $this->input->post('correo'),
			'CONTRASENIA_USUARIO' => $this->input->post('contrasenia'),
			'FECHA_CAMBIOS' => $this->input->post('fecha_cambios'),
			'ID_ROL' => $this->input->post('id_rol'),
			'ID_USUARIO' => $this->input->post('id_usuario')
		);

		$this->Usuario->editar_usuario($usuario);
redirect('usuarioController/');
	}
//redireccionar al controlador porque si no se friega el diseño tanto del controlador como del navbar
	public function eliminar_usuario($ID_USUARIO)
	{
		$this->Usuario->delete_usuario($ID_USUARIO);
		redirect('usuarioController/');
	}
}