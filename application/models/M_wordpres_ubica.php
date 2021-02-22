<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_wordpres_ubica extends CI_Model {

	public function beneficios(){

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://ubica.pe/wp/wp-json/wp/v2/beneficios?filter%5Borderby%5D=posicion&order=asc',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
		));

		$response = curl_exec($curl);

		curl_close($curl);
		return json_decode($response);

	}

	public function detalle(){
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://ubica.pe/wp/wp-json/wp/v2/detalles?order=asc',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_POSTFIELDS => array('username' => 'ricv','password' => 'Ivanpepe_:;1'),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		return json_decode($response);
	}

}

/* End of file M_wordpres_ubica.php */
/* Location: ./application/models/M_wordpres_ubica.php */