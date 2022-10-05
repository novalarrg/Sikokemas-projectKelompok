<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Utama';
        $this->load->view('template_dokter/header', $data);
        $this->load->view('dokter/home_dokter');
        $this->load->view('template_dokter/footer');
    }
}
