<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MarcaController extends CI_Controller {

	
	public function __construct(){

		parent::__construct();

		$this->load->model('MarcaModel');
		$this->load->helper('form');
		
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Marca',
			'view' => 'marca/marca',
			'data_view' => array()
		);

		$data['marca'] = $this->MarcaModel->obtener_marca();
		$this->load->view('template/main_view',$data);
	}

	
	public function nuevo_marca()
	{
		$data = array(
			'page_title' => 'Nuevo Marca',
			'view' => 'marca/AddMarca',
			'data_view' => array()
		);

		$this->load->view('template/main_view',$data);
	}

	public function insert_marca()
	{
		$data = array(
			'NOMBRE_MARCA' => $this->input->post('marca')
		);

		$this->MarcaModel->insert_marca($data);
		$this->index(); //index
		redirect('MarcaController/');
	}

	public function editar_marca($ID_MARCA)
	{
		$data = array(
			'page_title' => 'Editar marca',
			'view' => 'marca/AddMarca',
			'data_view' => array()
		);

		$data['update'] = $this->MarcaModel->obtener_marca_update($ID_MARCA);
		$this->load->view('template/main_view',$data);
	}

	public function update_marca()
	{
		$marca = array(
			'NOMBRE_MARCA' => $this->input->post('marca'),
			'ID_MARCA' => $this->input->post('id_marca')
		);

		$this->MarcaModel->editar_marcas($marca);
		$this->index();
		redirect('MarcaController/');
	}

	public function eliminar_marca($ID_MARCA)
	{
		$this->MarcaModel->delete_marca($ID_MARCA);
		$this->index();
		redirect('MarcaController/');
	}
}
