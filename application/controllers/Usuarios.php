<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Usuario');
    }

    public function index()
    {
        $data['usuarios'] = $this->Usuario->get_usuarios();
        $this->load->view('header');
        $this->load->view('Usuarios/index', $data);
        $this->load->view('footer');
    }
   
    public function add(){
        $this->load->view('header');
        $this->load->view('Usuarios/add');
        $this->load->view('footer');
    }

    public function create(){
        $data = array(
            'apellido_usu' => $this->input->post('apellido_usu'),
            'nombre_usu' => $this->input->post('nombre_usu'),
            'email_usu' => $this->input->post('email_usu'),
            'password_usu' => $this->input->post('password_usu'),
            'estado_usu' => $this->input->post('estado_usu'),
            'fk_id_per' => $this->input->post('fk_id_per')
        );

        $this->Usuario->createUsuario($data);
        $this->session->set_flashdata('success', 'El usuario a sido creado exitosamente.');
        redirect('Usuarios/index');
    }

    public function edit($UsuarioId){
        $data['usuario'] = $this->Usuario->getUsuarioById($UsuarioId);

        $this->load->view('header');
        $this->load->view('Usuarios/edit', $data);
        $this->load->view('footer');
    }

    public function update($UsuarioId){
        $data = array(
            'apellido_usu' => $this->input->post('apellido_usu'),
            'nombre_usu' => $this->input->post('nombre_usu'),
            'email_usu' => $this->input->post('email_usu'),
            'password_usu' => $this->input->post('password_usu'),
            'estado_usu' => $this->input->post('estado_usu'),
            'fk_id_per' => $this->input->post('fk_id_per')
        );

        $this->Usuario->updateUsuario($UsuarioId, $data);
        $this->session->set_flashdata('success', 'El usuario a sido actualizado exitosamente.');
        redirect('Usuarios/index');
    }

    public function delete($UsuarioId){
        $this->Usuario->deleteUsuario($UsuarioId);
        $this->session->set_flashdata('success', 'El usuario a sido eliminado exitosamente.');
        redirect('Usuarios/index');
    }  
}
