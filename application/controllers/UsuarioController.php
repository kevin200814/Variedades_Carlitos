<?php
defined('BASEPATH') or exit('No direct script access allowed');


class UsuarioController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario');
		$this->load->model('Roles');
		$this->load->model('PermisosModel');
	}
	public function index()
	{
		if ($this->session->userdata('is_logued_in') === TRUE) {
			$data = array(
				'page_title' => 'Usuario',
				'view' => 'usuario/usuario',
				'data_view' => array()
			);

			$data['usuario'] = $this->Usuario->obtener_usuarios();
			$data['roles'] = $this->Roles->obtener_roles();
			$this->load->view('template/main_view', $data);
		}else{
			$this->load->view('login');
		}
	}
	public function nuevo_usuario()
	{
		if ($this->session->userdata('is_logued_in') === TRUE) {
			$data = array(
				'page_title' => 'Nuevo usuario',
				'view' => 'usuario/AddUsuario',
				'data_view' => array()
			);

			$data['roles'] = $this->Roles->obtener_roles();
			$this->load->view('template/main_view', $data);
		}else{
			$this->load->view('login');
		}
	}
	public function insert_usuario()
	{
		if ($this->session->userdata('is_logued_in') === TRUE) {
			$originalDate = $this->input->post('fecha_cambios');
			$timestamp = strtotime($originalDate);
			$newDate = date("Y-m-d", $timestamp);

			$data = array(
				'NOMBRE_USUARIO' => $this->input->post('nombre'),
				'NICK_USUARIO' => $this->input->post('nick'),
				'CORREO_USUARIO' => $this->input->post('correo'),
				'CONTRASENIA_USUARIO' => $this->input->post('contrasenia'),
				'RECOVERY_PREGUNTA' => base64_encode($this->input->post('pregunta')),
				'RECOVERY_RESPUESTA' => base64_encode($this->input->post('respuesta')),
				'FECHA_CAMBIOS' => $newDate,
				'ID_ROL' => $this->input->post('id_rol')
			);

			$this->Usuario->insert_usuario($data);
			$this->session->set_flashdata('insert','¡El usuario se ha guardado correctamente!');
			$this->index();
		}else{
			$this->load->view('login');
		}
	}
	//para las vistas normales dejar el template/main_view
	//para los crud de actualizar dejar el template/main porque si no da conflicto el navbar con el css del crud
	public function editar_usuario($ID_USUARIO)
	{
		if ($this->session->userdata('is_logued_in') === TRUE) {
			$data = array(
				'page_title' => 'Editar usuario',
				'view' => 'usuario/Addusuario',
				'data_view' => array()
			);
			$data['roles'] = $this->Roles->obtener_roles();
			$data['update'] = $this->Usuario->obtener_usuario($ID_USUARIO);
			$this->load->view('template/main_view', $data);
		}else{
			$this->load->view('login');
		}
	}

	public function update_usuario()
	{
		if ($this->session->userdata('is_logued_in') === TRUE) {
			$originalDate = $this->input->post('fecha_cambios');
			$timestamp = strtotime($originalDate);
			$newDate = date("Y-m-d", $timestamp);

			$usuario = array(
				'NOMBRE_USUARIO' => $this->input->post('nombre'),
				'NICK_USUARIO' => $this->input->post('nick'),
				'CORREO_USUARIO' => $this->input->post('correo'),
				'CONTRASENIA_USUARIO' => $this->input->post('contrasenia'),
				'RECOVERY_PREGUNTA' => $this->input->post('pregunta'),
				'RECOVERY_RESPUESTA' => $this->input->post('respuesta'),
				'FECHA_CAMBIOS' => $newDate,
				'ID_ROL' => $this->input->post('id_rol'),
				'ID_USUARIO' => $this->input->post('id_usuario')
			);

			$this->Usuario->editar_usuario($usuario);
			$this->session->set_flashdata('update','¡El usuario se ha actualizado correctament!');
			redirect('usuarioController/');
		}else{
			$this->load->view('login');
		}
	}
	//redireccionar al controlador porque si no se friega el diseño tanto del controlador como del navbar
	
		public function eliminar_usuario($ID_USUARIO)
		{
			if ($this->session->userdata('is_logued_in') === TRUE) {
				if ($this->session->userdata('ID_USUARIO') == $ID_USUARIO) {

					
					$this->session->set_flashdata('delete','¡No se puede eliminar su usuario en sesion!');
				}else{
					$this->Usuario->delete_usuario($ID_USUARIO);
					$this->session->set_flashdata('delete','El usuario se ha eliminado!');
					redirect('usuarioController/');
				}
				redirect('usuarioController/');

			}else{
				$this->load->view('login');
			}
		}
	}
