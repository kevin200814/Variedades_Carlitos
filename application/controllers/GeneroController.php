<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GeneroController extends CI_Controller {

	
	public function __construct(){

		parent::__construct();

		$this->load->model('GeneroModel');
		$this->load->helper('form');
		
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Genero',
			'view' => 'genero/genero',
			'data_view' => array()
		);

		$data['genero'] = $this->GeneroModel->obtener_genero();
		$this->load->view('template/main_view',$data);
	}
	
	public function nuevo_genero()
	{
		$data = array(
			'page_title' => 'Nuevo Genero',
			'view' => 'genero/AddGenero',
			'data_view' => array()
		);

		$this->load->view('template/main_view',$data);
	}

	public function insert_genero()
	{
		$data = array(
			'TIPO_GENERO' => $this->input->post('genero')
		);

		$this->GeneroModel->insert_genero($data);
		redirect('GeneroController/');
	}

	public function editar_genero($ID_GENERO)
	{
		$data = array(
			'page_title' => 'Editar Genero',
			'view' => 'genero/AddGenero',
			'data_view' => array()
		);

		$data['update'] = $this->GeneroModel->obtener_genero_update($ID_GENERO);
		$this->load->view('template/main_view',$data);
	}

	public function update_genero()
	{
		$marca = array(
			'TIPO_GENERO' => $this->input->post('genero'),
			'ID_GENERO' => $this->input->post('id_genero')
		);

		$this->GeneroModel->editar_generos($marca);
		redirect('GeneroController/');
	}

	public function eliminar_genero($ID_GENERO)
	{
		$this->GeneroModel->delete_genero($ID_GENERO);
		redirect('GeneroController/');
	}
}
