<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asistencias extends CI_Controller {
    public function index()
	{
        $this->load->model('Asistencia');
        $data['asistencias'] = $this->Asistencia->get_asistencias();
        $this->load->view('header');
		$this->load->view('Asistencias/index' , $data);


	}
   
    
}