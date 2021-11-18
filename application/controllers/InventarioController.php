<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InventarioController extends CI_Controller {

	
	public function __construct(){

		parent::__construct();
		$this->load->model('Inventario');
		$this->load->model('PermisosModel');
		$this->load->model('ProveedorModel');
		$this->load->model('PagoModel');
		$this->load->library('cart'); 
		
	}

	public function inicio()
	{ 

		if ($this->session->userdata('is_logued_in') === TRUE) {	
			$data = array(
				'icon' => '../assets/images/favicon.png',
				'page_title' => 'Sistema de Inventario',
				'view' => 'inventario/inventario',
				'data_view' => array()
			);
			$data['inventario'] = $this->Inventario->obtener_inventario();
			$this->load->view('template/main_view',$data);
		}else{
			$this->load->view('login');
		}
	}


	public function index()
	{

		if ($this->session->userdata('is_logued_in') === TRUE) {	
			$data = array(
				'icon' => '../assets/images/favicon.png',
				'page_title' => 'Sistema de Inventario',
				'view' => 'inventario/verInventario',
				'data_view' => array()
			);

			$data['lista'] = $this->Inventario->getLista();
			$data['total'] = 0;
			$this->load->view('template/main_view',$data);
		}else{
			$this->load->view('login');
		}
	}

	public function siguienteForm()
	{

		if ($this->session->userdata('is_logued_in') === TRUE) {	
			$data = array(
				'icon' => '../assets/images/favicon.png',
				'page_title' => 'Sistema de Inventario',
				'view' => 'inventario/AddInventario',
				'data_view' => array()
			);

			$data['lista'] = $this->Inventario->getLista();
			$data['proveedor'] = $this->ProveedorModel->allProveedor();
			$data['pago'] = $this->PagoModel->allPago();
			$data['stock'] = $this->Inventario->allStock();
			$data['total'] = 0;
			$this->load->view('template/main_view',$data);
		}else{
			$this->load->view('login');
		}
	}

	public function nuevoInventario(){
		if ($this->session->userdata('is_logued_in') === TRUE) {	
			
			$data = array(
				'ID_PRODUCTO' => $this->input->post('id_producto'),
				'NOMBRE_PRODUCTO' => $this->input->post('nombre_producto'),
				'TIPO_CATEGORIA' => $this->input->post('tipo_categoria'),
				'NOMBRE_COLOR' => $this->input->post('nombre_color'),
				'TIPO_GENERO' => $this->input->post('tipo_genero'),
				'TALLA' => $this->input->post('talla'),
				'NOMBRE_MARCA' => $this->input->post('nombre_marca'),
				'CANTIDAD' => $this->input->post('cantidad')
			);



			$this->Inventario->insertLista($data);

			redirect(base_url().'InventarioController/index');
		}else{
			$this->load->view('login');
		}

	}

	public function updateInventario(){
		if ($this->session->userdata('is_logued_in') === TRUE) {

			for($i=0; $i < count($_POST['id_lista']); $i++){

				$data = array(
				'CANTIDAD' => $_POST['cantidad'][$i],
				'UNITARIO' => $_POST['unitario'][$i],
				'TOTAL_DOCENA' => $_POST['total'],
				'ID_LISTA' => $_POST['id_lista'][$i]
			);
			

			$this->Inventario->updateLista($data);

			}

			

			if ($this->input->post('Actualizar')) {
				//Boton actualizar

				redirect(base_url().'InventarioController/index');				

			}else{
				//Boton Siguiente

				redirect(base_url().'InventarioController/siguienteForm');	

			}
			
			
		}else{
			$this->load->view('login');
		}

	}

	public function MultipleInsert()
	{
		if ($this->session->userdata('is_logued_in') === TRUE) {	

			for($i=0; $i < count($_POST['ID_LISTA']); $i++){

			/*------------------------------------ TBL ENTRADA --------------------------------*/
			$dataEntrada = array(
				'FECHA_ENTRADA' => $_POST['FECHA_ENTRADA'][$i],
				'PRECIO_UNIDAD' => $_POST['PRECIO_UNIDAD'][$i],
				'PRECIO_DOCENA' => $_POST['TOTAL_D'],
				'STOCK_ACTUAL' => $_POST['STOCK_ACTUAL'][$i]
			);

			$ultimo_id_Entrada =  $this->Inventario->insertEntrada($dataEntrada);


			/*------------------------------------ TBL SALIDA --------------------------------*/
			$dataSalida = array(
				'FECHA_SALIDA' => $_POST['FECHA_SALIDA'][$i],
				'VENTA_FINAL' => $_POST['VENTA_FINAL'][$i],
				'CANTIDAD_SALIDA' => $_POST['CANTIDAD_SALIDA'][$i],
				'TOTAL_A_CANCELAR' => $_POST['TOTAL_A_CANCELAR'][$i]
				
			);

			$ultimo_id_Salida =  $this->Inventario->insertSalida($dataSalida);

			/*------------------------------------ INTER_ENTRADA_SALIDA --------------------------------*/
			$dataIntermedia = array(
				'COD_DEUDA' => $_POST['codigoD'],
				'ID_ENTRADA' => $ultimo_id_Entrada,
				'ID_PRODUCTO' => $_POST['ID_PRODUCTO_I'][$i],
				'ID_SALIDA' => $ultimo_id_Salida,
				'FECHA_SALIDA' => $_POST['FECHA_SALIDA_I'][$i],
				'ID_ESTADO_STOCK' => $_POST['id_stock'],
				'STOCK_FINAL' => $_POST['STOCK_FINAL'][$i]
			);
 
			$this->Inventario->insertIntermedia($dataIntermedia);

			/*------------------------------------ VEN MOVIMIENTOS --------------------------------*/
			$dataMovimiento = array(
				'COD_DEUDA' => $_POST['codigoD'],
				'ID_PRODUCTO' => $_POST['ID_PRODUCTO_M'][$i],
				'ID_PROVEEDOR' => $_POST['id_proveedor'],
				'FECHA_MOVIMIENTO' => $_POST['FECHA_MOVIMIENTO'][$i],
				'DEUDA_PROVEEDOR' => $_POST['TOTAL_D'],
				'ABONO_PROVEEDOR' => $_POST['abono'],
				'TOTAL_A_PAGAR' => $_POST['TOTAL_D'] - $_POST['abono'],
				'ID_ESTADO_PAGO' => $_POST['id_pago'],
				'UPDATE_USUARIO' => $this->session->userdata('ID_USUARIO')

			);

			$this->Inventario->insertMovimiento($dataMovimiento);
			

		}

		$this->Inventario->eliminarLP();
		redirect('DeudasController/index');

			

		}else{
			$this->load->view('login');
		}


	}

	public function StockInventario()
	{
		if ($this->session->userdata('is_logued_in') === TRUE) {	

			$data = array(
				'icon' => '../assets/images/favicon.png',
				'page_title' => 'Sistema de Inventario',
				'view' => 'inventario/ViewInventario',
				'data_view' => array()
			);
			$data['intermedia'] = $this->Inventario->getintermedia();
			$this->load->view('template/main_view',$data);
			
		}else{
			$this->load->view('login');
		}


	}



	public function eliminarProd($ID_LISTA)
	{
		if ($this->session->userdata('is_logued_in') === TRUE) {	

			$this->Inventario->eliminarProd($ID_LISTA);
			redirect('InventarioController/');
		}else{
			$this->load->view('login');
		}


	}




}
