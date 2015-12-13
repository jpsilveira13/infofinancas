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
        $this->load->view('content/login/index');
    }

    public function registrar()
    {
        $this->load->view('content/register/index');
    }
}