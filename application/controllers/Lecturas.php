<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecturas extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Lectura');
    }

    public function index()
    {
        $data['lecturas'] = $this->Lectura->get_lecturas();
        $this->load->view('header');
        $this->load->view('Lecturas/index', $data);
        $this->load->view('footer');
    }
   
    public function add(){
        $this->load->view('header');
        $this->load->view('Lecturas/add');
        $this->load->view('footer');
    }

    public function create(){
        $data = array(
            'anio_lec' => $this->input->post('anio_lec'),
            'mes_lec' => $this->input->post('mes_lec'),
            'estado_lec' => $this->input->post('estado_lec'),
            'lectura_anterior_lec' => $this->input->post('lectura_anterior_lec'),
            'lectura_actual_lec' => $this->input->post('lectura_actual_lec')
        );

        $this->Lectura->createLectura($data);
        $this->session->set_flashdata('success', 'La lectura ha sido creada exitosamente.');
        redirect('Lecturas/index');
    }

    public function edit($LecturaId){
        $data['lectura'] = $this->Lectura->getLecturaById($LecturaId);

        $this->load->view('header');
        $this->load->view('Lecturas/edit', $data);
        $this->load->view('footer');
    }

    public function update($LecturaId){
        $data = array(
            'anio_lec' => $this->input->post('anio_lec'),
            'mes_lec' => $this->input->post('mes_lec'),
            'estado_lec' => $this->input->post('estado_lec'),
            'lectura_anterior_lec' => $this->input->post('lectura_anterior_lec'),
            'lectura_actual_lec' => $this->input->post('lectura_actual_lec')
        );

        $this->Lectura->updateLectura($LecturaId, $data);
        $this->session->set_flashdata('success', 'La lectura ha sido actualizada exitosamente.');
        redirect('Lecturas/index');
    }

    public function delete($LecturaId){
        $this->Lectura->deleteLectura($LecturaId);
        $this->session->set_flashdata('success', 'La lectura ha sido eliminada exitosamente.');
        redirect('Lecturas/index');
    }  
}
