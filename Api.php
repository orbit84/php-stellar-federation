<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function index()
	{
		echo '<h2>API page</h2>';
	}


	public function federation() {
		header('Access-Control-Allow-Origin: *');
		header('Content-type: application/json');

		$this->load->model('federation_model');

		// check that parameters are defined
		if( !isset($_GET['q']) || !isset($_GET['type']) )
			return $this->federation_model->error('missing parameters, excepted parameter '.
													'q and parameter type');

		$this->federation_model->handle($_GET['q'], $_GET['type']);
	}

}
