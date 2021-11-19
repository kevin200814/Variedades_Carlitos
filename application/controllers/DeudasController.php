<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeudasController extends CI_Controller {

	
	public function __construct(){

		parent::__construct();
		$this->load->model('DeudaModel');
		$this->load->model('PermisosModel');
		
	}
 
	public function index()
	{

		if ($this->session->userdata('is_logued_in') === TRUE) {	
			$data = array(
				'icon' => '../assets/images/favicon.png',
				'page_title' => 'Sistema de Inventario',
				'view' => 'deudas/deuda',
				'data_view' => array()
			);

			$data['movimientos'] = $this->DeudaModel->getMovimientos();
			$this->load->view('template/main_view',$data);
		}else{
			$this->load->view('login');
		}
	}

	

	
	public function editarMovimiento($COD_DEUDA)
	{
		if ($this->session->userdata('is_logued_in') === TRUE) {
			$data = array(
				'page_title' => 'Editar movimiento',
				'view' => 'deudas/formDeuda',
				'data_view' => array()
			);

			$data['movimientos'] = $this->DeudaModel->obtenerMovimiento($COD_DEUDA);
			$this->load->view('template/main_view',$data);
		}else{
			$this->load->view('login');
		}
	}
 
	public function detallesMovimiento($COD_DEUDA)
	{
		if ($this->session->userdata('is_logued_in') === TRUE) {
			$data = array(
				'page_title' => 'Detalles movimientos',
				'view' => 'deudas/detalleDeuda',
				'data_view' => array()
			);

			
			$data['deuda'] = $this->DeudaModel->obtenerDeuda($COD_DEUDA);


			$this->load->view('template/main_view',$data);
		}else{
			$this->load->view('login');
		}
	}

	public function updateAbono()
	{
		if ($this->session->userdata('is_logued_in') === TRUE) {

			$ABONO_PROVEEDOR = $this->input->post('DEUDA_PROVEEDOR');
			$DEUDA_PROVEEDOR = $this->input->post('ABONO_PROVEEDOR');

			$ESTADO = 2;

			if ($ABONO_PROVEEDOR == $DEUDA_PROVEEDOR) {
				
				$ESTADO = 1;
			}


			$abono = array(
				$deuda =  $this->input->post('DEUDA_PROVEEDOR'),
				'ABONO_PROVEEDOR' => $this->input->post('ABONO_PROVEEDOR'),
				'TOTAL_A_PAGAR' => $deuda -  $this->input->post('ABONO_PROVEEDOR'),
				'COD_DEUDA' => $this->input->post('COD_DEUDA'),
				'ID_MOVIMIENTO' => $this->input->post('ID_MOVIMIENTO'),
				'ESTADO_STOCK' => $ESTADO
				
			);

			$this->DeudaModel->updateAbono($abono);
			$this->session->set_flashdata('update','¡Abono editado correctamente!');
			redirect('DeudasController/index');
		}else{
			$this->load->view('login');
		}

		
	}

	
	 
}
