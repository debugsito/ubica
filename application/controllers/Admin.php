<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index(){
		if(isset($_SESSION['logged_in'])){
			redirect('sitios','refresh');
		}else{
			$data["plugins"] = [
				"validate" => $this->load->view('plugins/Validator', "", true)
			];
			$this->load->view('template/v_head', $data, FALSE);
			$this->load->view('pages/v_login', $data, FALSE);
			$this->load->view('template/v_foot', $data, FALSE);

		}
	}

	public function login(){
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');

		if ($user == "admin") {
			if ($pass == "admin") {
				$data['result'] = 'OK';
				$data['msj'] = 'Bienvenido';
				$newdata = array(
					'logged_in' => TRUE
				);
				$this->session->set_userdata($newdata);
			}else{
				$data['result'] = 'ERROR';
				$data['msj'] = 'Su Contraseña no es correcta.';
			}
		}else{
			$data['result'] = 'ERROR';
			$data['msj'] = 'Su Usuario no es correcto.';
		}
		echo json_encode($data);
	}

	public function logout(){
		session_destroy();
		redirect(base_url('admin'),'refresh');
	}

	
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */