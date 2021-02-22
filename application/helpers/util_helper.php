<?php 

function GUID(){
	if (function_exists('com_create_guid') === true)
	{
		return trim(com_create_guid(), '{}');
	}
	return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}

function version(){
	date_default_timezone_set('America/Lima');
	echo "?v=".date("YmdHis");	
}

function now() {
	date_default_timezone_set('America/Lima');
	return date("Y-m-d H:i:s");
}

function ver($text) {
	if (!isset($text) || empty($text))
		return '';
	echo '<pre>';
	var_dump($text);
	echo '</pre>';
}

function verp($text) {
	if (!isset($text) || empty($text))
		return '';
	echo '<pre>';
	print_r($text);
	echo '</pre>';
}


function ubicaVista($body, $data = false){
	$CI = & get_instance();
	echo $CI->load->view('template/v_head', $data, true);	
	echo $CI->load->view($body, $data, true);
	echo $CI->load->view('template/v_footer', $data, true);
	echo $CI->load->view('template/v_foot', $data, true);
}


function mostrarVista($body, $data = false){
	$CI = & get_instance();
	echo $CI->load->view('template/v_header', $data, true);	
	echo $CI->load->view($body, $data, true);
	echo $CI->load->view('template/v_footer', $data, true);
}

function loadLibs($body, $data){
	$CI = & get_instance();
	// ob_start();
	echo '<div class="container">';
	echo $CI->load->view('template/v_header', $data, true);	
	echo $body;
	echo '</div>';
	echo $CI->load->view('template/v_footer', $data, true);
}

function perfil(){
	// $CI = & get_instance();
	// $CI->load->model('M_permisos');
	// return $CI->M_permisos->datosUser();
}


function agruparArray($array, $key) {
	$return = array();
	foreach($array as $k) {
		$v = (array)$k;
		$return[$v[$key]][] = $v;			
	}
	return $return;
}

function limpiarEstados($array, $key, $filtro, $llave) {
	$return = array();
	foreach($array as $k) {
		$v = (array)$k;
		if ($v[$filtro] == $llave) {
			$return[$v[$key]][] = $v;			
		}

	}
	return $return;
}


function moneda($value){
	$numero = round($value,2);
	return number_format($numero, 2);
}