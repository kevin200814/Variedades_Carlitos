<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StockController extends CI_Controller {

	
	public function __construct(){

		parent::__construct();
		$this->load->model('StockModel');
		
	}

	public function index()
	{

		if ($this->session->userdata('is_logued_in') === TRUE) {	
			$data = array(
				'icon' => '../assets/images/favicon.png',
				'page_title' => 'Sistema de Inventario',
				'view' => 'stock/stock',
				'data_view' => array()
			);

			$data['stock'] = $this->StockModel->allStock();
			$this->load->view('template/main_view',$data);
		}else{
			$this->load->view('login');
		}
	}

	public function nuevoStock()
	{
		$data = array(
			'page_title' => 'Editar Estado de Pago',
			'view' => 'stock/addStock',
			'data_view' => array()
		);

		
		$this->load->view('template/main_view',$data);
	}

	public function insertStock()
	{
		$data = array(
			'ESTADO_STOCK' => $this->input->post('estado_stock')
		);

		$this->StockModel->insertStock($data);
		redirect('StockController/index');
	}

	public function editarStock($ID_ESTADO_STOCK)
	{
		$data = array(
			'page_title' => 'Editar Estado de Pago',
			'view' => 'stock/addStock',
			'data_view' => array()
		);

		$data['update'] = $this->StockModel->obtenerStock($ID_ESTADO_STOCK);
		$this->load->view('template/main_view',$data);
	}

	public function updateStock()
	{
		$stock = array(
			'ESTADO_STOCK' => $this->input->post('estado_stock'),
			'ID_ESTADO_STOCK' => $this->input->post('id_estado_stock')
		);

		$this->StockModel->updateStock($stock);
		redirect('StockController/index');
	}

	public function eliminarStock($ID_ESTADO_STOCK)
	{
		$this->StockModel->deleteStock($ID_ESTADO_STOCK);
		
		redirect('StockController/index');
	}
	
}