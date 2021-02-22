<?php 

function enviarMail($datos){
	try {
		$CI = & get_instance();
		$config = Array(
			'mailtype'  => 'html', 
			'charset'   => 'utf-8'
		);
		$CI->load->library('email', $config);
		$CI->email->clear();
		if (is_array($adjuntos) && count($adjuntos)>0) {
			foreach ($adjuntos as $key => $value) {
				// $mail->AddAttachment('path_to_pdf', $name = 'Name_for_pdf',  $encoding = 'base64', $type = 'application/pdf');
				$CI->email->attach($value['archivo'], '', $value['nombre'], $value['type']);
				// $CI->email->attach($value, 'inline', null, '', true);
			}
		}
		if (is_array($datos['CC']) && count($datos['CC'])>0) {
			foreach ($datos['CC'] as $key => $value) {
				$CI->email->cc($value);
			}
		}
		if (is_array($datos['CCO']) && count($datos['CCO'])>0) {
			foreach ($datos['CCO'] as $key => $value) {
				$CI->email->bcc($value);
			}
		}

		if (is_array($datos['para']) && count($datos['para'])>0) {
			foreach ($datos['para'] as $key => $value) {
				$CI->email->to($value);
			}
		}

		$CI->email->from('noreply@ubica.pe', 'No responder Ubica.pe');
		$CI->email->reply_to('noreply@ubica.pe', 'No responder Ubica.pe');
		$CI->email->subject($datos['asunto']);
		$CI->email->message($datosm['ensaje']);
		if (!$CI->email->send()){
			$response['result'] 	= 'ERROR';
			$response['msj2'] 	= $CI->email->print_debugger();
			$response['msj']	= $CI->email->print_debugger(array('headers'));
		}else{
			$response['result'] 	= 'OK';
		}
		return $response;
	} catch (Exception $e) {
		throw new Exception($e);
		return;
	}


}

	function armarEmail($vista, $data = false){
		try {
			$CI = & get_instance();
			$CI->load->library('parser');
			$view = $CI->load->view('email/E_header', $data, true);
			$view .= $CI->parser->parse($vista, $data, true);
			$view .= $CI->load->view('email/E_footer', $data, true);
			return $view;
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}


