<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rutas extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Ruta');
    }

    public function index()
    {
        $data['rutas'] = $this->Ruta->get_rutas();
        $this->load->view('header');
        $this->load->view('Rutas/index', $data);
        $this->load->view('footer');
    }
   
    public function add(){
        $this->load->view('header');
        $this->load->view('Rutas/add');
        $this->load->view('footer');
    }

    public function create(){
        $data = array(
            'nombre_rut' => $this->input->post('nombre_rut'),
            'descripcion_rut' => $this->input->post('descripcion_rut'),
            'estado_rut' => $this->input->post('estado_rut')
        );

        $this->Ruta->createRuta($data);
        $this->session->set_flashdata('success', 'La ruta ha sido creado exitosamente.');
        redirect('Rutas/index');
    }

    public function edit($RutaId){
        $data['ruta'] = $this->Ruta->getRutaById($RutaId);

        $this->load->view('header');
        $this->load->view('Rutas/edit', $data);
        $this->load->view('footer');
    }

    public function update($RutaId){
        $data = array(
            'nombre_rut' => $this->input->post('nombre_rut'),
            'descripcion_rut' => $this->input->post('descripcion_rut'),
            'estado_rut' => $this->input->post('estado_rut')
        );

        $this->Ruta->updateRuta($RutaId, $data);
        $this->session->set_flashdata('success', 'La ruta ha sido actualizado exitosamente.');
        redirect('Rutas/index');
    }

    public function delete($RutaId){
        $this->Ruta->deleteRuta($RutaId);
        $this->session->set_flashdata('success', 'La ruta ha sido eliminado exitosamente.');
        redirect('Rutas/index');
    }  
}
