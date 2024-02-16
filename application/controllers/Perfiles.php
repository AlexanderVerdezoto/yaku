<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfiles extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Perfil');
    }

    public function index()
    {
        $data['perfiles'] = $this->Perfil->get_perfiles();
        $this->load->view('header');
        $this->load->view('Perfiles/index', $data);
        $this->load->view('footer');
    }
   
    public function add(){
        $this->load->view('header');
        $this->load->view('Perfiles/add');
        $this->load->view('footer');
    }

    public function create(){
        $data = array(
            'nombre_per' => $this->input->post('nombre_per'),
            'descripcion_per' => $this->input->post('descripcion_per'),
            'estado_per' => $this->input->post('estado_per')
        );

        $this->Perfil->createPerfil($data);
        $this->session->set_flashdata('success', 'El perfil ha sido creado exitosamente.');
        redirect('Perfiles/index');
    }

    public function edit($PerfilId){
        $data['perfil'] = $this->Perfil->getPerfilById($PerfilId);

        $this->load->view('header');
        $this->load->view('Perfiles/edit', $data);
        $this->load->view('footer');
    }

    public function update($PerfilId){
        $data = array(
            'nombre_per' => $this->input->post('nombre_per'),
            'descripcion_per' => $this->input->post('descripcion_per'),
            'estado_per' => $this->input->post('estado_per')
        );

        $this->Perfil->updatePerfil($PerfilId, $data);
        $this->session->set_flashdata('success', 'El perfil ha sido actualizado exitosamente.');
        redirect('Perfiles/index');
    }

    public function delete($PerfilId){
        $this->Perfil->deletePerfil($PerfilId);
        $this->session->set_flashdata('success', 'El perfil ha sido eliminado exitosamente.');
        redirect('Perfiles/index');
    }  
}
