<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Animation extends CI_Controller{
    public function index(){
        //helper('url');
        //echo base_url('assets');
        //$this->load->view('pages/header');
        $this->load->view('animation_publisher');
       // $this->load->view('pages/footer');
    }   
}
