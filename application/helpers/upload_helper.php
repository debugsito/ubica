<?php 

function carpetas() {
	date_default_timezone_set('America/Lima');

	$direct = date('Y/m/');
	$data['carpeta'] = "./recursos/upload/" . $direct;
	if (!file_exists($data['carpeta'])) {
		if (!mkdir($data['carpeta'], 0755, true)) {
			$data["error"] = "Fallo al Crear Carpetas";
		}
	}
	return $data;
}


function limpiarName($string) {
	$extension = pathinfo($string, PATHINFO_EXTENSION);
	$nombre_base = basename($string, '.' . $extension);
	return hyphenize($nombre_base);
}

function hyphenize($string) {
	$dict = array(
		"I'm" => "I am",
		"thier" => "their",
            // Add your own replacements here
	);
	return strtolower(
		preg_replace(
			array('#[\\s-]+#', '#[^A-Za-z0-9\. -]+#'), array('-', ''),
			cleanString(
				str_replace(
					array_keys($dict), array_values($dict), urldecode($string)
				)
			)
		)
	);
}


function cleanString($text) {
	$utf8 = array(
		'/[áàâãªä]/u' => 'a',
		'/[ÁÀÂÃÄ]/u' => 'A',
		'/[ÍÌÎÏ]/u' => 'I',
		'/[íìîï]/u' => 'i',
		'/[éèêë]/u' => 'e',
		'/[ÉÈÊË]/u' => 'E',
		'/[óòôõºö]/u' => 'o',
		'/[ÓÒÔÕÖ]/u' => 'O',
		'/[úùûü]/u' => 'u',
		'/[ÚÙÛÜ]/u' => 'U',
		'/ç/' => 'c',
		'/Ç/' => 'C',
		'/ñ/' => 'n',
		'/Ñ/' => 'N',
        '/–/' => '-', // UTF-8 hyphen to "normal" hyphen
        '/[’‘‹›‚]/u' => ' ', // Literally a single quote
        '/[“”«»„]/u' => ' ', // Double quote
        '/ /' => ' ', // nonbreaking space (equiv. to 0x160)
    );
	return preg_replace(array_keys($utf8), array_values($utf8), $text);
}

function fileUploadIndividual($FILES, $name, $required = true, $typeFile = null){
	try {
		$CI = & get_instance();
		
		$carpeta = carpetas();
		$nombre_fichero = $carpeta['carpeta'];
		
		
		$config['allowed_types'] = (isset($typeFile))?$typeFile:'*';;
		$config['max_size'] = '50000';
	
		$config['file_name'] = limpiarName($_FILES[$name]['name']);
		$config['upload_path'] = $nombre_fichero; 
		$CI->load->library('upload',$config); 
		$CI->upload->initialize($config);
		if($CI->upload->do_upload($name)){
			$data['result'] = 'OK';
			$uploadData			= $CI->upload->data();
			$urlBase 			= substr($nombre_fichero . $uploadData['file_name'], 1);
			$uploadData['url'] 	= $urlBase;
			$data['data'] 		= $uploadData;
		}else{
			if ($required) {
				$data['result'] = 'ERROR';
				$data['data'] = $CI->upload->display_errors();
			}else{
				$data['result'] = 'OK';
				$data['data']['url'] = NULL;
			}
		}


		return $data;
	} catch (Exception $e) {

	}
}

function fileUpload($FILES, $name, $typeFile = null){
	try {
		$CI = & get_instance();
		// print_r($name);
		// ver($FILES);exit;
		$count = count($FILES[$name]['name']);
		$carpeta = carpetas();
		$nombre_fichero = $carpeta['carpeta'];
		$data = [];
		for($i=0;$i<$count;$i++){
			if(!empty($_FILES[$name]['name'][$i])){
				$nombre = '';
				$_FILES['file']['name'] = $_FILES[$name]['name'][$i];
				$_FILES['file']['type'] = $_FILES[$name]['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES[$name]['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES[$name]['error'][$i];
				$_FILES['file']['size'] = $_FILES[$name]['size'][$i];
				$config['allowed_types'] = (isset($typeFile))?$typeFile:'*';;
				$config['max_size'] = '50000';
				$config['file_name'] = limpiarName($_FILES['file']['name']);
				$config['upload_path'] = $nombre_fichero; 
				$CI->load->library('upload',$config); 
				$CI->upload->initialize($config);
				if($CI->upload->do_upload('file')){
					$uploadData = $CI->upload->data();
					$urlBase = substr($nombre_fichero . $uploadData['file_name'], 1);

					$insert['titulo'] 		= $uploadData['file_name'];
					$insert['type_file'] 	= $uploadData['file_type'];
					$insert['url'] 			= $urlBase;
					$insert['descripcion'] 	= (isset($descripcion))?$descripcion:'';

					$response = $CI->M_datos->insert('archivos', $insert);

					$uploadData['urlBase'] = $urlBase;
					$uploadData['id'] 		= $response['id'];
					$data[] = $uploadData;
				}else{
					$data[]['error'] = $CI->upload->display_errors();
				}
			}
		}
		return $data;		
	} catch (Exception $e) {
		throw new Exception($e);
		return;
	}
}

function fileUploadXML($FILES, $name, $typeFile = null){
	try {

		$archivo = fileUpload($FILES, $name, $typeFile);

		ver($archivo);
		if (file_exists($archivo[0]['full_path'])) {
			$xml = simplexml_load_file($archivo[0]['full_path']);
			print_r($xml);
		} else {
			exit('Error abriendo test.xml.');
		}
		// $canciones = simplexml_load_file($archivo[0]['full_path']);
		// $xml = new SimpleXMLElement($canciones);
		// ver($xml);exit;

		// if (file_exists('test.xml')) {
		// 	$xml = simplexml_load_file('test.xml');

		// 	print_r($xml);
		// } else {
		// 	exit('Error abriendo test.xml.');
		// }

	} catch (Exception $e) {
		throw new Exception($e);
		return;
	}
}


?>