<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class produk extends CI_Controller {


    public function index()
    {
       
        $this->load->model('m_produk');
        $data['produk'] = $this->m_produk->getproduk();
        //print_r($data['produk']);
        $this->load->view('v_produk',$data);
    }
} 