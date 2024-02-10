<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consumos extends CI_Controller {
    public function index()
	{
        $this->load->model('Consumo');
        $data['consumos'] = $this->Consumo->get_consumos();
        $this->load->view('header');
		$this->load->view('Consumos/index' , $data);


	}
   
    
}