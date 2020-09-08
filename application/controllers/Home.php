<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller 
{

	public function index()
	{
		//echo base_url();
		//$this->load->view('pages/header');
		$this->load->view('pages/header');
		$this->load->view('modules/inicio');
		$this->load->view('pages/footer');

	}
	public function about(){
		$this->load->view('pages/header');
		$this->load->view('modules/nosotros');
		$this->load->view('pages/footer');
	}

	public function contact(){
		$this->load->view('pages/header');
		$this->load->view('modules/contactenos');
		$this->load->view('pages/footer');
	}

	public function working(){
		$this->load->view('pages/header');
		$this->load->view('modules/working');
		$this->load->view('pages/footer');
	}
}
