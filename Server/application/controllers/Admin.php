<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Admin extends CI_Controller {


    public function index()
    {
       
        $this->load->model('M_admin');
        $data['admin'] = $this->M_admin->getAdmin();
        //print_r($data['produk']);
        $this->load->view('V_admin',$data);
    }
} 