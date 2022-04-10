<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembagian extends CI_Controller
{

    public function index()
    {
        $nilai = $this->input->post();
        if ($this->input->post() != null && is_numeric($nilai['nilaia']) && is_numeric($nilai['nilaib'])) {
            $data['a'] = $nilai['nilaia'];
            $data['b'] = $nilai['nilaib'];
            $data['c'] = $data['a'] / $data['b'];
        } else {
            $data['a'] = "";
            $data['b'] = "";
            $data['c'] = "";
        }
        $this->load->view('pembagian/pembagian', $data);
    }
}
