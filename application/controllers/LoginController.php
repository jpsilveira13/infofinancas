<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class HomeController
 */
class LoginController extends CI_Controller
{

    public function index()
    {
        $this->load->view('login');
    }

    public function verificarLogin()
    {

    }

    public function registrar()
    {
        $this->load->view('register');
    }
}