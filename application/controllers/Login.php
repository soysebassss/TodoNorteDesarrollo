<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Usuario_model', 'user', true);
		$this->administrador = null;
		//$this->load->model('Usuario_model','usuario',true);
	}
	public function index() {
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('security');
		$data = array();
	
		if (isset($_REQUEST['usu_correo']) && isset($_REQUEST['usu_clave'])) {
			$admCorreo     = $_REQUEST['usu_correo'];
			$admClave = $_REQUEST['usu_clave'];
			//se fijan las rreglas de validación
			$this->form_validation->set_rules('usu_correo', 'usu_correo', 'trim|required|xss_clean');
			$this->form_validation->set_rules('usu_clave', 'usu_clave', 'trim|required|xss_clean|callback_check_database');//valida el form y checkea la bd
			if ($this->form_validation->run())//si la validación falla se envía al form de nuevo
			{

				//$userData = $this->session->userdata('logged_in');

				/*
				if (in_array(1, $userData['permission'])) {
					redirect('dashboard/index', 'refresh');
				}
				if (in_array(2, $userData['permission']) || in_array(3, $userData['permission'])) {
					redirect('document', 'refresh');
				}
				*/

				redirect('Administrador', 'refresh');
			} else {
				$data['error'] = "Usuario y/o contraseña incorrecta";
			}

		}
		$this->load->view('login', $data);
	}

	function logout() {
		//session_start();
		session_destroy();
		$this->session->unset_userdata('logged_in');
		//session_destroy(); //destruye la sesión, o sea el arreglo de sesión logged_in
		redirect('Welcome/admin', 'refresh');
	}
	function check_database($pass) {
		//Field validation succeeded.&nbsp; Validate against database
		$userName = $this->input->post('usu_correo');//extrae el dato post que viene del formulario y la guarda en una variable
		//query the database
		$user  = $this->user->login($userName, $pass);// trae verdadero si encuentra los datos user y pass en la bd
		$exist = false;

		//if (!is_null($user) && count($permission = $user->getPermission()) > 0) {//si hay resultado de la consulta en la bd
		if (!is_null($user)) {//si hay resultado de la consulta en la bd

			$sess_array = array();
			$sess_array = array(//guarda los datos traidos de la bd en un array
				'id'         => $user->get('usu_id'),
				'correo'      => $user->get('usu_correo'),
				'clave'       => $user->get('usu_clave')
			);
			$this->session->set_userdata('logged_in', $sess_array);//almacena el array $sess_array en array de sesión logged_in
			$exist = true;
		}

		return $exist;
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */