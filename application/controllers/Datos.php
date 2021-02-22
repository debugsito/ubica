<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datos extends CI_Controller {
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
                "validate" => $this->load->view('plugins/Validator', "", true),
                "bootstrapSelect" => $this->load->view('plugins/bootstrapSelect', "", true)
			];
			$this->load->view('template/v_head', $data, FALSE);
			$this->load->view('pages/v_datos', $data, FALSE);
			$this->load->view('template/v_foot', $data, FALSE);

		}
	}

	
	public function registro(){
		
	}
	
	
}

/* End of file Datos.php */
/* Location: ./application/controllers/Datos.php */