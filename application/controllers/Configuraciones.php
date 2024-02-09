<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuraciones extends CI_Controller {
    public function index()
	{
        $this->load->model('Configuracion');
        $data['configuraciones'] = $this->Configuracion->get_configuraciones();
        $this->load->view('header');
		$this->load->view('Configuraciones/index' , $data);


	}
   
    
}