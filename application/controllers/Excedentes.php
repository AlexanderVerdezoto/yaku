<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excedentes extends CI_Controller {
    public function index()
	{
        $this->load->model('Excedente');
        $data['excedentes'] = $this->Excedente->get_excedentes();
        $this->load->view('header');
		$this->load->view('Excedentes/index' , $data);


	}
   
    
}