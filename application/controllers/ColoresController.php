<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ColoresController extends CI_Controller {

	
	public function __construct(){

		parent::__construct();

		$this->load->model('ColoresModel');
		$this->load->helper('form');
		
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Productos',
			'view' => 'productos',
			'data_view' => array()
		);

		$this->load->view('template/main_view',$data);
	}

	public function vista()
	{
		$data = array(
			'page_title' => 'Colores',
			'view' => 'colores/colores',
			'data_view' => array()
		);

		$data['colores'] = $this->ColoresModel->obtener_colores();
		$this->load->view('template/main_view',$data);
	}

	public function nuevo_color()
	{
		$data = array(
			'page_title' => 'Nuevo color',
			'view' => 'colores/AddColores',
			'data_view' => array()
		);

		$this->load->view('template/main_view',$data);
	}

	public function insert_color()
	{
		$data = array(
			'NOMBRE_COLOR' => $this->input->post('color')
		);

		$this->ColoresModel->insert_color($data);
		redirect('ColoresController/vista');
	}

	public function editar_color($ID_COLORES)
	{
		$data = array(
			'page_title' => 'Editar color',
			'view' => 'colores/AddColores',
			'data_view' => array()
		);

		$data['update'] = $this->ColoresModel->obtener_color_update($ID_COLORES);
		$this->load->view('template/main',$data);
	}

	public function update_color()
	{
		$colores = array(
			'NOMBRE_COLOR' => $this->input->post('color'),
			'ID_COLORES' => $this->input->post('id_color')
		);

		$this->ColoresModel->editar_color($colores);
		$this->vista();
		redirect('ColoresController/vista');
	}

	public function eliminar_color($ID_COLORES)
	{
		$this->ColoresModel->delete_color($ID_COLORES);
		$this->vista();
		redirect('ColoresController/vista');
	}
}
