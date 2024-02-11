<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Historiales extends CI_Controller {
    public function index()
	{
        $this->load->model('Historial');
        $data['historiales'] = $this->Historial->get_historiales();
        $this->load->view('header');
		$this->load->view('Historiales/index' , $data);


	}
   
    
}