<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excedentes extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Excedente');
    }
    public function index()
	{
        $data['excedentes'] = $this->Excedente->get_excedentes();
        $this->load->view('header');
		$this->load->view('Excedentes/index' , $data);
        $this->load->view('footer');
	}
   
    public function add(){
        $this->load->view('header');
        $this->load->view('Excedentes/add');
        $this->load->view('footer');
    }

    public function create(){
        $data = array(
            'id_tar' => $this->input->post('id_tar'),
            'limite_minimo_ex' => $this->input->post('limite_minimo_ex'),
            'limite_maximo_ex' => $this->input->post('limite_maximo_ex'),
            'tarifa_ex' => $this->input->post('tarifa_ex')
        );

        $this->Excedente->createExcedente($data);
        $this->session->set_flashdata('success', 'El excedente ha sido creado exitosamente.');
        redirect('Excedentes/index');
    }

    public function edit($ExcedenteId){
        $data['excedentes'] = $this->Excedente->getExcedenteById($ExcedenteId);

        $this->load->view('header');
        $this->load->view('Excedentes/edit', $data);
        $this->load->view('footer');
    }

    public function update($ExcedenteId){
        $data = array(
            'id_tar' => $this->input->post('id_tar'),
            'limite_minimo_ex' => $this->input->post('limite_minimo_ex'),
            'limite_maximo_ex' => $this->input->post('limite_maximo_ex'),
            'tarifa_ex' => $this->input->post('tarifa_ex')
        );

        $this->Excedente->updateExcedente($ExcedenteId, $data);
        $this->session->set_flashdata('success', 'El excedente ha sido actualizado exitosamente.');
        redirect('Excedentes/index');
    }

    public function delete($ExcedenteId){
        $this->Excedente->deleteExcedente($ExcedenteId);
        $this->session->set_flashdata('success', 'El excedente ha sido eliminado exitosamente.');
        redirect('Excedentes/index');
    }
    
}