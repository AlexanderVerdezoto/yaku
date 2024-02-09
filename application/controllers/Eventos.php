<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {
    public function index()
	{
        $this->load->model('Evento');
        $data['eventos'] = $this->Evento->get_eventos();
        $this->load->view('header');
		$this->load->view('Eventos/index' , $data);


	}
   
    
}