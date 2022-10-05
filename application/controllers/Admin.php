<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'My Profile';
        $this->load->view('view_1', $data);
    }
}
