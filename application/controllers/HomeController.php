<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class HomeController
 */
class HomeController extends CI_Controller {

    public function index()
    {
        $this->load->view('home');
    }
}