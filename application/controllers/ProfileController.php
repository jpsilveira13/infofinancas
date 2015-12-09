<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class ProfileController
 */
class ProfileController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()//para login normal
    {
        $this->load->view('profile');//chama a tela do perfil

    }
}