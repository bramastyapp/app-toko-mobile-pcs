<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Api_simple extends CI_Controller {


    public function index()
    {
       
        $this->load->model('M_produk');
        $data['produk'] = $this->M_produk->getProduk();
        //print_r($data['produk']);
        //$this->load->view('v_produk',$data);

        $data_json = array(
            "success" => true,
            "message" => "Data found",
            "data" => $data['produk']
        );

        echo json_encode($data_json);
        //print_r($data_json);
    }
} 