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
			$ID_PRODUCTO = $this->input->post('id_producto');
			$data = array(
				'ID_PRODUCTO' =>  $this->input->post('id_producto'),
				'ID_SALIDA' =>  $this->input->post('id_salida'),
				'NOMBRE_PRODUCTO' => $this->input->post('nombre_producto'),
				'TIPO_CATEGORIA' => $this->input->post('tipo_categoria'),
				'NOMBRE_COLOR' => $this->input->post('nombre_color'),
				'TIPO_GENERO' => $this->input->post('tipo_genero'),
				'TALLA' => $this->input->post('talla'),
				'NOMBRE_MARCA' => $this->input->post('nombre_marca'),
				'CANTIDAD_VENDIDA' => $this->input->post('cantidad'),
				'STOCK_ACTUAL' => $this->input->post('stock_actual')
				
			);

			$this->VentaModel->insertLista($data);

			redirect(base_url().'VentaController/infoVenta', $ID_PRODUCTO);
		}else{
			$this->load->view('login');
		}

	}


	public function updateVenta(){
		if ($this->session->userdata('is_logued_in') === TRUE) {

			for($i=0; $i < count($_POST['id_lista']); $i++){


				$totalPago[$i] = $_POST['cantidad'][$i] * $_POST['VENTA_FINAL'][$i];
				
				$totalFinal = $totalFinal + $totalPago[$i];


				$data = array(
					'CANTIDAD_VENDIDA' => $_POST['cantidad'][$i],
					'PRECIO_VENTA_FINAL' => $_POST['VENTA_FINAL'][$i],
					'TOTAL_A_CANCELAR' => $totalPago[$i],
					'TOTAL_FINAL' => $totalFinal,
					'ID_LISTA' => $_POST['id_lista'][$i]
				);


				$this->VentaModel->updateLista($data);

			}

			redirect(base_url().'VentaController/infoVenta');

			


		}else{
			$this->load->view('login');
		}

	}



	public function registrarVenta(){
		if ($this->session->userdata('is_logued_in') === TRUE) {



			for($i=0; $i < count($_POST['ID_LISTA']); $i++){


					$totalPago[$i] = $_POST['CANTIDAD_SALIDA'][$i] * $_POST['VENTA_FINAL_S'][$i];
					//$totalFinal = $totalFinal + $totalPago[$i];
					$dataSalida = array(
						'FECHA_SALIDA' => $_POST['fecha_salida'],
						'CANTIDAD_SALIDA' => $_POST['CANTIDAD_SALIDA'][$i],
						'VENTA_FINAL' => $_POST['VENTA_FINAL_S'][$i],
						'TOTAL_A_CANCELAR' => $totalPago[$i],
						'TOTAL_FINAL' => $_POST['TOTAL_FINAL_S'],
						'ID_SALIDA' => $_POST['ID_SALIDA_S'][$i]

					);
					$this->VentaModel->updateSalida($dataSalida);	


					

					$dataIntermedia = array(
						'STOCK_FINAL' => $_POST['STOCK_ACTUAL'][$i] - $_POST['CANTIDAD_SALIDA'][$i],
						'ID_PRODUCTO' => $_POST['ID_PRODUCTO_I'][$i]

					);

					$this->VentaModel->updateIntermedia($dataIntermedia);	


			}


			$this->VentaModel->eliminarLV();
			redirect(base_url().'InventarioController/StockInventario');	
 
		}else{
			$this->load->view('login');
		}

	}


	public function eliminarProd($ID_LISTA)
	{
		if ($this->session->userdata('is_logued_in') === TRUE) {	

			$this->VentaModel->eliminarProd($ID_LISTA);
			redirect('VentaController/infoVenta');
		}else{
			$this->load->view('login');
		}


	}



	public function verVentana()
	{

		if ($this->session->userdata('is_logued_in') === TRUE) {	
			$data = array(
				'icon' => '../assets/images/favicon.png',
				'page_title' => 'Sistema de Inventario',
				'view' => 'venta/verVenta',
				'data_view' => array()
			);

			$data['inventario'] = $this->VentaModel->getIntermediaV();
			$this->load->view('template/main_view',$data);
		}else{
			$this->load->view('login');
		}
	}






}