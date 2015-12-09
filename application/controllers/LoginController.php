<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class LoginController
 */
class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //var_dump($this->session->userdata('id'));
        $this->load->view('login');
    }

    public function registrar()
    {
        $this->load->view('register');
    }
}