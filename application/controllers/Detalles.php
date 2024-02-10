<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detalles extends CI_Controller {
    public function index()
	{
        $this->load->model('Detalle');
        $data['detalles'] = $this->Detalle->get_detalles();
        $this->load->view('header');
		$this->load->view('Detalles/index' , $data);


	}
    
}