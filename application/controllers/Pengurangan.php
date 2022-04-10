<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurangan extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$nilai = $this->input->post();
		if ($this->input->post() != null && is_numeric($nilai['input_a']) && is_numeric($nilai['input_b'])){
			$data['a'] = $nilai['input_a'];
			$data['b'] = $nilai['input_b'];
			$data['c'] = $data['a']-$data['b'];
		}else{
			$data['a'] = '';
			$data['b'] = '';
			$data['c'] = '';
		}
		$this->load->view('pengurangan/pengurangan',$data);
	}

	
}
