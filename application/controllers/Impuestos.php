<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Impuestos extends CI_Controller {

	public function index()
	{
        $this->load->model('Impuesto');
        $data['impuestos'] = $this->Impuesto->get_impuestos();
        $this->load->view('header');
		$this->load->view('Impuestos/index' , $data);
        // $this->load->view('foote	r');

	}
   
    
}