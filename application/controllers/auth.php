<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('auth/login');
        $this->load->view('template/footer');
    }
}
