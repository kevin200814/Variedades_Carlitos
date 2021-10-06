<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	
	public function __construct(){

		parent::__construct();

		$this->load->model('LoginModel');
		$this->load->library('form_validation');
		$this->load->helper('form');
		
	}

	public function index()
	{
		$this->load->view('login');
		
	}


	public function inicio()
	{

		if ($this->session->userdata('is_logued_in') === TRUE) {	
			$data = array(
				'page_title' => 'Sistema de Inventario',
				'view' => 'Home',
				'data_view' => array()
			);
			$this->load->view('template/main',$data);
		}else{
			$this->load->view('login');
		}



	}


	public function userAuth(){
		$usuario = $this->input->post('usuario',TRUE);
		$contraseña = $this->input->post('contrasenia',TRUE);
		$validacion = $this->LoginModel->getUser($usuario,$contraseña);

		if ($validacion->num_rows() > 0) {
			$data = $validacion->row_array();
			$id_usuario = $data['ID_USUARIO'];
			$usuario = $data['NICK_USUARIO'];
			$contraseña = $data['CONTRASENIA_USUARIO'];
			$id_rol = $data['ID_ROL'];

			$session_data = array(
				'ID_USUARIO' => $id_usuario,
				'NICK_USUARIO' => $usuario,
				'CONTRASENIA_USUARIO' => $contraseña,
				'ID_ROL' => $id_rol,
				'is_logued_in' => TRUE 

			);

			$this->session->set_userdata($session_data);
			if ($id_rol === 1 ) {
				redirect('LoginController/inicio');
			}elseif($id_rol === 2){
				redirect('LoginController/inicio');
			}elseif ($id_rol === 3) {
				redirect('LoginController/inicio');
			}

		}else{
			echo $this->session->set_flashdata('msg','Usuario o contraseña Incorrectos');
			redirect('LoginController');
		}



	}



	public function logout(){
		if ($this->session->userdata('is_logued_in') == TRUE ) {
			$this->session->sess_destroy();
			redirect(base_url().'LoginController');
		}


	} 



}
