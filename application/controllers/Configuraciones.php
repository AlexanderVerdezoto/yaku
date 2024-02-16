<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuraciones extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Configuracion');
    }

    public function index()
	{
        $data['configuraciones'] = $this->Configuracion->get_configuraciones();
        $this->load->view('header');
		$this->load->view('Configuraciones/index' , $data);
        $this->load->view('footer');
	}
   
    public function add(){
        $this->load->view('header');
        $this->load->view('Configuraciones/add');
        $this->load->view('footer');
    }

    public function create(){
        $data = array(
            'nombre_con' => $this->input->post('nombre_con'),
            'ruc_con' => $this->input->post('ruc_con'),
            'logo_con' => $this->input->post('logo_con'),
            'telefono_con' => $this->input->post('telefono_con'),
            'direccion_con' => $this->input->post('direccion_con'),
            'email_con' => $this->input->post('email_con'),
            'servidor_con' => $this->input->post('servidor_con'),
            'puerto_con' => $this->input->post('puerto_con'),
            'password_con' => $this->input->post('password_con'),
            'anio_inicial_con' => $this->input->post('anio_inicial_con'),
            'mes_inicial_con' => $this->input->post('mes_inicial_con')
        );

        $this->Configuracion->createConfiguracion($data);
        $this->session->set_flashdata('success', 'La Configuracion ha sido creada exitosamente.');
        redirect('Configuraciones/index');
    }

    public function edit($ConfiguracionId){
        $data['configuracion'] = $this->Configuracion->getConfiguracionById($ConfiguracionId);

        $this->load->view('header');
        $this->load->view('Configuraciones/edit', $data);
        $this->load->view('footer');
    }

    public function update($ConfiguracionId){
        $data = array(
            'nombre_con' => $this->input->post('nombre_con'),
            'ruc_con' => $this->input->post('ruc_con'),
            'logo_con' => $this->input->post('logo_con'),
            'telefono_con' => $this->input->post('telefono_con'),
            'direccion_con' => $this->input->post('direccion_con'),
            'email_con' => $this->input->post('email_con'),
            'servidor_con' => $this->input->post('servidor_con'),
            'puerto_con' => $this->input->post('puerto_con'),
            'password_con' => $this->input->post('password_con'),
            'anio_inicial_con' => $this->input->post('anio_inicial_con'),
            'mes_inicial_con' => $this->input->post('mes_inicial_con')
        );

        $this->Configuracion->updateConfiguracion($ConfiguracionId, $data);
        $this->session->set_flashdata('success', 'La configuracion ha sido actualizada exitosamente.');
        redirect('Configuraciones/index');
    }

    public function delete($ConfiguracionId){
        $this->Configuracion->deleteConfiguracion($ConfiguracionId);
        $this->session->set_flashdata('success', 'La configuracion ha sido eliminada exitosamente.');
        redirect('Configuraciones/index');
    }
    
}