<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Historiales extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Historial');
    }

    public function index()
    {
        $data['historiales'] = $this->Historial->get_historiales();
        $this->load->view('header');
        $this->load->view('Historiales/index', $data);
        $this->load->view('footer');
    }
   
    public function add(){
        $this->load->view('header');
        $this->load->view('Historiales/add');
        $this->load->view('footer');
    }

    public function create(){
        $data = array(
            'estado_his' => $this->input->post('estado_his'),
            'observacion_his' => $this->input->post('observacion_his'),
            'propietario_actual_his' => $this->input->post('propietario_actual_his')
        );

        $this->Historial->createHistorial($data);
        $this->session->set_flashdata('success', 'El historial a sido creado exitosamente.');
        redirect('Historiales/index');
    }

    public function edit($HistorialId){
        $data['historial'] = $this->Historial->getHistorialById($HistorialId);

        $this->load->view('header');
        $this->load->view('Historiales/edit', $data);
        $this->load->view('footer');
    }

    public function update($HistorialId){
        $data = array(
            'estado_his' => $this->input->post('estado_his'),
            'observacion_his' => $this->input->post('observacion_his'),
            'propietario_actual_his' => $this->input->post('propietario_actual_his')
        );

        $this->Historial->updateHistorial($HistorialId, $data);
        $this->session->set_flashdata('success', 'El historial a sido actualizado exitosamente.');
        redirect('Historiales/index');
    }

    public function delete($HistorialId){
        $this->Historial->deleteHistorial($HistorialId);
        $this->session->set_flashdata('success', 'El historial a sido eliminado exitosamente.');
        redirect('Historiales/index');
    }  
}
