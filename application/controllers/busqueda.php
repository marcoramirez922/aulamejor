<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busqueda extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->model('busqueda_mod');
    }
	public function index()
	{
		//print_r($_POST);
		$dataInf= array(
			"nombre" => (isset($_POST['nombre']) && $_POST['nombre'] != '')? $_POST['nombre'] : null,
			"correo" => (isset($_POST['correo']) && $_POST['correo'] != '')? $_POST['correo'] : null,
			"compra" => (isset($_POST['compra']) && $_POST['compra'] != '')? $_POST['compra'] : null,
			"folio" => (isset($_POST['folio']) && $_POST['folio'] != '')? $_POST['folio'] : null
		);
		$data['response'] = $this->busqueda_mod->buscar($dataInf);
		echo json_encode($data['response']);
	}
}
