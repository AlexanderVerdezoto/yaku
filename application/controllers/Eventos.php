<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Evento');
    }

    public function index()
	{
        $data['eventos'] = $this->Evento->get_eventos();
        $this->load->view('header');
		$this->load->view('Eventos/index' , $data);
        $this->load->view('footer');
	}
   
    public function add(){
        $this->load->view('header');
        $this->load->view('Eventos/add');
        $this->load->view('footer');
    }

    public function create(){
        $data = array(
            'descripcion_eve' => $this->input->post('descripcion_eve'),
            'fecha_hora_eve' => $this->input->post('fecha_hora_eve'),
            'lugar_eve' => $this->input->post('lugar_eve')
        );

        $this->Evento->createEvento($data);
        $this->session->set_flashdata('success', 'El evento ha sido creado exitosamente.');
        redirect('Eventos/index');
    }

    public function edit($EventoId){
        $data['eventos'] = $this->Evento->getEventoById($EventoId);

        $this->load->view('header');
        $this->load->view('Eventos/edit', $data);
        $this->load->view('footer');
    }

    public function update($EventoId){
        $data = array(
            'descripcion_eve' => $this->input->post('descripcion_eve'),
            'fecha_hora_eve' => $this->input->post('fecha_hora_eve'),
            'lugar_eve' => $this->input->post('lugar_eve')
        );

        $this->Evento->updateEvento($EventoId, $data);
        $this->session->set_flashdata('success', 'El evento ha sido actualizado exitosamente.');
        redirect('Eventos/index');
    }

    public function delete($EventoId){
        $this->Evento->deleteEvento($EventoId);
        $this->session->set_flashdata('success', 'El evento ha sido eliminado exitosamente.');
        redirect('Eventos/index');
    }
}