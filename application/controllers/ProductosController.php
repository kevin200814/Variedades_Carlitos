<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductosController extends CI_Controller {

	public function index()
	{

		if ($this->session->userdata('is_logued_in') === TRUE) {	
			$data = array(
				'icon' => '../assets/images/favicon.png',
				'page_title' => 'Sistema de Inventario',
				'view' => 'producto/productos',
				'data_view' => array()
			);

			
			$this->load->view('template/main_view',$data);
		}else{
			$this->load->view('login');
		}
	}
}