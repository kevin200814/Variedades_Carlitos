<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VentaController extends CI_Controller {

	
	public function __construct(){

		parent::__construct();
		$this->load->model('VentaModel');
		$this->load->model('PermisosModel');
		
	}

	public function index()
	{

		if ($this->session->userdata('is_logued_in') === TRUE) {	
			$data = array(
				'icon' => '../assets/images/favicon.png',
				'page_title' => 'Sistema de Inventario',
				'view' => 'venta/nuevaVenta',
				'data_view' => array()
			);

			$data['inventario'] = $this->VentaModel->obtener_inventario();
			$this->load->view('template/main_view',$data);
		}else{
			$this->load->view('login');
		}
	}



	public function infoVenta()
	{

		if ($this->session->userdata('is_logued_in') === TRUE) {	
			$data = array(
				'icon' => '../assets/images/favicon.png',
				'page_title' => 'Sistema de Inventario',
				'view' => 'venta/venta',
				'data_view' => array()
			);

			$data['lista'] = $this->VentaModel->getLista();
			$this->load->view('template/main_view',$data);
		}else{
			$this->load->view('login');
		}
	}


	public function nuevaVenta(){
		if ($this->session->userdata('is_logued_in') === TRUE) {	
			
			$data = array(
				'ID_PRODUCTO' => $this->input->post('id_producto'),
				'NOMBRE_PRODUCTO' => $this->input->post('nombre_producto'),
				'TIPO_CATEGORIA' => $this->input->post('tipo_categoria'),
				'NOMBRE_COLOR' => $this->input->post('nombre_color'),
				'TIPO_GENERO' => $this->input->post('tipo_genero'),
				'TALLA' => $this->input->post('talla'),
				'NOMBRE_MARCA' => $this->input->post('nombre_marca'),
				'CANTIDAD_VENDIDA' => $this->input->post('cantidad')
				
			);

			$this->VentaModel->insertLista($data);

			redirect(base_url().'VentaController/infoVenta');
		}else{
			$this->load->view('login');
		}

	}
}