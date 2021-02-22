<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('M_datos');
	}

	public function index(){
		$data['js'] = array(
			'home','login'
		);
		$data["plugins"] = [
			"validate" => $this->load->view('plugins/Validator', "", true),
			"bootstrapSelect" => $this->load->view('plugins/bootstrapSelect', "", true),
			"animate" => $this->load->view('plugins/animate', array('flip'=>true, 'wow'=>true), true),
			"owl-carousel" => $this->load->view('plugins/owl-carousel', '', true)
		];
		$this->load->model('M_wordpres_ubica');
		$data['beneficios']		= $this->M_wordpres_ubica->beneficios();
		$data['detalle']		= $this->M_wordpres_ubica->detalle();

		ubicaVista('pages/v_home', $data);
	}

    public function homefilter(){
        $data['js'] = array(
            'home','login'
        );
        $data["plugins"] = [
            "validate" => $this->load->view('plugins/Validator', "", true),
            "bootstrapSelect" => $this->load->view('plugins/bootstrapSelect', "", true),
            "animate" => $this->load->view('plugins/animate', array('flip'=>true, 'wow'=>true), true),
            "owl-carousel" => $this->load->view('plugins/owl-carousel', '', true)
        ];

        ubicaVista('pages/v_homefilter', $data);
    }

    public function homeabout(){
        $data['js'] = array(
            'home','login'
        );
        $data["plugins"] = [
            "validate" => $this->load->view('plugins/Validator', "", true),
            "bootstrapSelect" => $this->load->view('plugins/bootstrapSelect', "", true),
            "animate" => $this->load->view('plugins/animate', array('flip'=>true, 'wow'=>true), true),
            "owl-carousel" => $this->load->view('plugins/owl-carousel', '', true)
        ];

        ubicaVista('pages/v_homeabout', $data);
    }

	public function registro(){
		$this->load->helper('util');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nombres', 	'Nombres', 	'trim|required');
		$this->form_validation->set_rules('apellidos', 	'Apellidos','trim|required');
		$this->form_validation->set_rules('email', 		'Correo', 	'trim|valid_email|required|is_unique[inscritos.correo]', 
			array('is_unique' => 'Este Correo ya fue registrado.'));
		$this->form_validation->set_rules('telefono', 	'Teléfono', 'trim|required');
		$this->form_validation->set_rules('password', 	'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$response["result"] = "ERROR";
			$campos = [];
			$camposError = $this->form_validation->error_array();
			foreach ($camposError as $key => $value) {
				$error[$key] = $value;
				$campo[] = $error;
			}
			$response["msj"]	= "Se detecto un error en algunos campos.";
			$response['campos'] = $campo;
		} else {

			$parametros = array(
				'nombre' => $this->input->post('nombres'),
				'apellidos' => $this->input->post('apellidos'),
				'correo'  => $this->input->post('email'),
				'telefono' => $this->input->post('telefono'),
				'password' => $this->input->post('password'),
				'activado' => 0,
				'code_active' => GUID()
			);

			$response = $this->M_datos->insert('inscritos',$parametros);

			$this->_mailBienvenida($parametros);
			if ($response) {
				$response['result']	= 'OK';
				$response['msj']	= 'Datos registrados correctamente.';
			} else {
				$response['result']	= 'Error';
				$response['msj']	= 'Error al registrar datos.';
			}
		}
		echo json_encode($response);
	}

	public function login(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 		'Correo', 	'trim|valid_email|required');
		$this->form_validation->set_rules('password', 	'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data["result"] = "ERROR";
			$campos = [];
			$camposError = $this->form_validation->error_array();
			foreach ($camposError as $key => $value) {
				$error[$key] = $value;
				$campo[] = $error;
			}
			$data["msj"]	= "Se detecto un error en algunos campos.";
			$data['campos'] = $campo;
		} else {

			$email = $this->input->post('email');
			$pass = $this->input->post('password');

			$where['correo'] = $email;

			$response = $this->M_datos->get('inscritos',$where,'row');
			if ($response) {
				if($response->correo == $email){
					if ($response->password == $pass) {
						if ($response->activado == 1) {
							$data['result'] = 'OK';
							$data['msj'] = 'Ingreso Correcto';
							$datos = array(
								'nombre' => $response->nombre,
								'apellidos' => $response->apellidos,
								'correo' => $response->correo,
								'telefono' => $response->telefono,
								'logged'  => true
							);
							$this->session->set_userdata($datos);
						}else{
							$data['result'] = 'ERROR';
							$data['msj'] = 'Confirmar su cuenta!';
							$data['campos'][0] = array('email' => "Confirmar su cuenta!");
						}
					}else{
						$data['result'] = 'ERROR';
						$data['msj'] = 'Su Contraseña no es correcta!';
						$data['campos'][0] = array('password' => "Su Contraseña no es correcta!");
					}
				}else{
					$data['result'] = 'ERROR';
					$data['msj'] = 'Su Usuario no es correcto!';
					$data['campos'][0] = array('email' => "Su Usuario no es correcto!");
				}
			}else{
				$data['result'] = 'ERROR';
				$data['msj'] = 'El correo ingresado no existe.';
				$data['campos'][0] = array('email' => "El correo ingresado no existe.");
			}
		}
		echo json_encode($data);
	}

	private function _mailBienvenida($parametros){
		
		$this->load->helper('mail');
		/****** INICIO CUERPO   *******/
		ob_start();
		?>
		Estimado, <b><?php echo $parametros['nombre'] ?></b>
		<p>
			Para informarle que su cuenta ha sido creada con éxito. Antes de ingresar a nuestra plataforma de UBICA.PE debe activar su cuenta, dar clic en el siguiente link:
		</p>
		<p style="text-align: center">
			<a target="_blank" style="text-decoration: ; color: #dc3545" href="<?php echo base_url().'/activar/'.$parametros['code_active']?>">Activar mi cuenta</a>
		</p>
		<p> 
			Saludos Cordiales.
		</p>
		<br>
		<?php
		/****** FIN CUERPO   *******/
		$datos['E_CUERPO'] =  ob_get_clean();
		$datos['E_TITULO'] = "Bienvenido a Ubica";
		$mail = array(
			'asunto' => "Registro Ubica",
			'para' => array($parametros['correo']),
			'mensaje' => armarEmail('email/E_plantilla_base', $datos)
		);
		var_dump($mail);exit;
		$envioMail = enviarMail($mail);
		if ($envioMail['result'] == 'OK') {
			$response['Titulo'] = "Cuenta Creada";
			$response['msj'] = "Se acaba de enviar un correo confirmando la creación de su usuario en nuestro sistema de registro.";
		}else{
			$response['Titulo'] = "Cuenta Creada";
			$response['msj'] = "Ya puede acceder, lamentablemente no se pudo enviar un correo confirmando la creación de cuenta.";
		}
		return $this->respond($response);
	}

	public function registro_fb(){
		$userData = json_decode($_POST['userData']); 
			
		$oauth_provider = $_POST['oauth_provider']; 
		$link = !empty($userData->link)?$userData->link:''; 
		$genero = !empty($userData->gender)?$userData->gender:''; 

		$parametros = array(
			'oauth_provider' 	=>  $oauth_provider,
			'nombre' 			=>  $userData->first_name,
			'apellidos' 		=>  $userData->last_name,
			'correo' 			=>  $userData->email,
			'genero' 			=>  $genero,
			'picture' 			=> 	$userData->picture->data->url,
			'link' 				=>  $link,
			'id_fb'				=>	$userData->id
		);
 
		if(!empty($userData)){ 
			
			

			$where['id_fb'] = $userData->id;

			$query = $this->M_datos->get('inscritos',$where,'row');

			if(!empty($query)){  
			
				$response['msj']	= 'Usuario existe.';
				$response['result'] = 'OK';

				$parametros['logged'] = true;
				$this->session->set_userdata($parametros);
				
			}else{ 

				$response = $this->M_datos->insert('inscritos',$parametros);
				if ($response) {
					$response['result']	= 'OK';
					$response['msj']	= 'Datos registrados correctamente.';

					$parametros['logged'] = true;
					$this->session->set_userdata($parametros);
					
				} else {
					$response['result']	= 'ERROR';
					$response['msj']	= 'Error al registrar datos.';
				}
				
			} 
			echo json_encode($response);
		}else{
			echo "No hay datos recibidos";
		} 

		
	}

	public function registro_google(){
			

		$parametros = array(
			'oauth_provider' 	=>  $this->input->post('oauth_provider'),
			'nombre' 			=>  $this->input->post('nombre'),
			'correo' 			=>  $this->input->post('correo'),
			'picture' 			=> 	$this->input->post('picture'),
			'id_fb'				=>	$this->input->post('id_fb'),
			'activado'			=> 1
		);
 
		if(!empty($parametros)){ 

			$where['id_fb'] = $this->input->post('id_fb');

			$query = $this->M_datos->get('inscritos',$where,'row');

			if(!empty($query)){  
			
				$response['msj']	= 'Usuario existe.';
				$response['result'] = 'OK';

				$parametros['logged'] = true;
				$this->session->set_userdata($parametros);
				
			}else{ 

				$response = $this->M_datos->insert('inscritos',$parametros);
				if ($response) {
					$response['result']	= 'OK';
					$response['msj']	= 'Datos registrados correctamente.';

					$parametros['logged'] = true;
					$this->session->set_userdata($parametros);
				} else {
					$response['result']	= 'ERROR';
					$response['msj']	= 'Error al registrar datos.';
				}
				
			} 
			echo json_encode($response);
		}else{
			echo "No hay datos recibidos";
		} 

		
	}

	public function preguntas(){
		$data['js'] = array(
			'home','login'
		);
		$data["plugins"] = [
			"validate" => $this->load->view('plugins/Validator', "", true),
			"bootstrapSelect" => $this->load->view('plugins/bootstrapSelect', "", true),
			"animate" => $this->load->view('plugins/animate', array('flip'=>true, 'wow'=>true), true),
			"owl-carousel" => $this->load->view('plugins/owl-carousel', '', true)
		];
		$this->load->model('M_wordpres_ubica');
		$data['beneficios']		= $this->M_wordpres_ubica->beneficios();
		$data['detalle']		= $this->M_wordpres_ubica->detalle();

		ubicaVista('pages/v_preguntas', $data);
	}

	public function busqueda(){
		$data['js'] = array(
			'home','login'
		);
		$data["plugins"] = [
			"validate" => $this->load->view('plugins/Validator', "", true),
			"bootstrapSelect" => $this->load->view('plugins/bootstrapSelect', "", true),
			"animate" => $this->load->view('plugins/animate', array('flip'=>true, 'wow'=>true), true),
			"owl-carousel" => $this->load->view('plugins/owl-carousel', '', true)
		];
		$this->load->model('M_wordpres_ubica');
		$data['beneficios']		= $this->M_wordpres_ubica->beneficios();
		$data['detalle']		= $this->M_wordpres_ubica->detalle();

		ubicaVista('pages/v_busqueda', $data);
	}

	public function nosotros(){
		$data['js'] = array(
			'home','login'
		);
		$data["plugins"] = [
			"validate" => $this->load->view('plugins/Validator', "", true),
			"bootstrapSelect" => $this->load->view('plugins/bootstrapSelect', "", true),
			"animate" => $this->load->view('plugins/animate', array('flip'=>true, 'wow'=>true), true),
			"owl-carousel" => $this->load->view('plugins/owl-carousel', '', true)
		];
		$this->load->model('M_wordpres_ubica');
		$data['beneficios']		= $this->M_wordpres_ubica->beneficios();
		$data['detalle']		= $this->M_wordpres_ubica->detalle();

		ubicaVista('pages/v_nosotros', $data);	
	}

	public function perfil(){
		$data['js'] = array(
			'home','login'
		);
		$data["plugins"] = [
			"validate" => $this->load->view('plugins/Validator', "", true),
			"bootstrapSelect" => $this->load->view('plugins/bootstrapSelect', "", true),
			"animate" => $this->load->view('plugins/animate', array('flip'=>true, 'wow'=>true), true),
			"owl-carousel" => $this->load->view('plugins/owl-carousel', '', true)
		];

		ubicaVista('pages/v_perfil', $data);

	}

	public function filter(){
		$data['js'] = array(
			'home','login'
		);
		ubicaVista('pages/v_filter', $data);
	}

	public function home2(){
		$data['js'] = array(
			'home','login'
		);
		ubicaVista('pages/v_home2', $data);
	}

}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */
