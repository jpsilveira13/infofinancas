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

    public function upload()
    {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);

        if (  $this->upload->do_upload())
        {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload_success', $data);
        }

    }
}