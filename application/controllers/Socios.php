<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socios extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Socio');
    }

    public function index()
    {
        $data['socios'] = $this->Socio->get_socios();
        $this->load->view('header');
        $this->load->view('Socios/index', $data);
        $this->load->view('footer');
    }
   
    public function add(){
        $this->load->view('header');
        $this->load->view('Socios/add');
        $this->load->view('footer');
    }

    public function create(){
        $data = array(
            'tipo_soc' => $this->input->post('tipo_soc'),
            'identificacion_soc' => $this->input->post('identificacion_soc'),
            'primer_apellido_soc' => $this->input->post('primer_apellido_soc'),
            'segundo_apellido_soc' => $this->input->post('segundo_apellido_soc'),
            'nombres_soc' => $this->input->post('nombres_soc'),
            'email_soc' => $this->input->post('email_soc'),
            'telefono_soc' => $this->input->post('telefono_soc'),
            'direccion_soc' => $this->input->post('direccion_soc'),
            'fecha_nacimiento_soc' => $this->input->post('fecha_nacimiento_soc'),
            'discapacidad_soc' => $this->input->post('discapacidad_soc'),
            'estado_soc' => $this->input->post('estado_soc')
        );

        $this->Socio->createSocio($data);
        $this->session->set_flashdata('success', 'El socio a sido creado exitosamente.');
        redirect('Socios/index');
    }

    public function edit($SocioId){
        $data['socio'] = $this->Socio->getSocioById($SocioId);

        $this->load->view('header');
        $this->load->view('Socios/edit', $data);
        $this->load->view('footer');
    }

    public function update($SocioId){
        $data = array(
            'tipo_soc' => $this->input->post('tipo_soc'),
            'identificacion_soc' => $this->input->post('identificacion_soc'),
            'primer_apellido_soc' => $this->input->post('primer_apellido_soc'),
            'segundo_apellido_soc' => $this->input->post('segundo_apellido_soc'),
            'nombres_soc' => $this->input->post('nombres_soc'),
            'email_soc' => $this->input->post('email_soc'),
            'telefono_soc' => $this->input->post('telefono_soc'),
            'direccion_soc' => $this->input->post('direccion_soc'),
            'fecha_nacimiento_soc' => $this->input->post('fecha_nacimiento_soc'),
            'discapacidad_soc' => $this->input->post('discapacidad_soc'),
            'estado_soc' => $this->input->post('estado_soc')
        );

        $this->Socio->updateSocio($SocioId, $data);
        $this->session->set_flashdata('success', 'El socio a sido actualizado exitosamente.');
        redirect('Socios/index');
    }

    public function delete($SocioId){
        $this->Socio->deleteSocio($SocioId);
        $this->session->set_flashdata('success', 'El socio a sido eliminado exitosamente.');
        redirect('Socios/index');
    }  
}
