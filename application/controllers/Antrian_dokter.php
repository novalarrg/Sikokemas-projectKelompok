<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Antrian_dokter extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Antrian Pasien';
        $this->load->view('template_dokter/header', $data);
        $data['antrian'] = $this->M_Antrian_dokter->antrian();
        $this->load->view('dokter/antrian', $data);
        $this->load->view('template_dokter/footer');
    }
}
