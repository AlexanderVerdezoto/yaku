<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecturas extends CI_Controller {

	public function index()
	{
        $this->load->model('Lectura');
        $data['lecturas'] = $this->Lectura->get_lecturas();
        $this->load->view('header');
		$this->load->view('Lecturas/index' , $data);
        // $this->load->view('foote	r');

	}
   
    
}