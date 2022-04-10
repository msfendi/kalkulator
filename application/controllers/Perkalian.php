<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perkalian extends CI_Controller
{
    public function index()
    {
        $nilai = $this->input->post();
        if ($nilai != null && is_numeric($nilai['angka1']) && is_numeric($nilai['angka2'])) {
            $data['angka1'] = $nilai['angka1'];
            $data['angka2'] = $nilai['angka2'];

            $data['hasil'] = $data['angka1'] * $data['angka2'];
        } else {
            $data['angka1'] = '';
            $data['angka2'] = '';
            $data['hasil'] = '';
        }

        $this->load->view('perkalian/perkalian', $data);
    }
}
