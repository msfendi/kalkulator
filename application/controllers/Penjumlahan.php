<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjumlahan extends CI_Controller {

	public function index()
	{
        $nilai = $this->input->post();
        if ($this->input->post() != null && is_numeric($nilai['a']) && is_numeric($nilai['b'])) {    
            $data['a'] = $nilai['a'];
            $data['b'] = $nilai['b'];
            $data['c'] = $data['a']+$data['b'];
        }else{
            $data['a'] = '';
            $data['b'] = '';
            $data['c'] = '';
        }
        $this->load->view('penjumlahan/penjumlahan',$data);
    }
}

?>
