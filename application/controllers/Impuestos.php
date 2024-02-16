<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Impuestos extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Impuesto');
    }

	public function index()
	{
        $data['impuestos'] = $this->Impuesto->get_impuestos();
        $this->load->view('header');
		$this->load->view('Impuestos/index' , $data);
        $this->load->view('footer');
	}
    
    public function add(){
        $this->load->view('header');
        $this->load->view('Impuestos/add');
        $this->load->view('footer');
    }

    public function create(){
        $data = array(
            'nombre_imp' => $this->input->post('nombre_imp'),
            'descripcion_imp' => $this->input->post('descripcion_imp'),
            'porcentaje_imp' => $this->input->post('porcentaje_imp'),
            'retencion_imp' => $this->input->post('retencion_imp'),
            'estado_imp' => $this->input->post('estado_imp')
        );

        $this->Impuesto->createImpuesto($data);
        $this->session->set_flashdata('success', 'El impuesto ha sido creado exitosamente.');
        redirect('Impuestos/index');
    }

    public function edit($ImpuestoId){
        $data['impuesto'] = $this->Impuesto->getImpuestoById($ImpuestoId);

        $this->load->view('header');
        $this->load->view('Impuestos/edit', $data);
        $this->load->view('footer');
    }

    public function update($ImpuestoId){
        $data = array(
            'nombre_imp' => $this->input->post('nombre_imp'),
            'descripcion_imp' => $this->input->post('descripcion_imp'),
            'porcentaje_imp' => $this->input->post('porcentaje_imp'),
            'retencion_imp' => $this->input->post('retencion_imp'),
            'estado_imp' => $this->input->post('estado_imp')
        );

        $this->Impuesto->updateImpuesto($ImpuestoId, $data);
        $this->session->set_flashdata('success', 'El impuesto ha sido actualizado exitosamente.');
        redirect('Impuestos/index');
    }

    public function delete($ImpuestoId){
        $this->Impuesto->deleteImpuesto($ImpuestoId);
        $this->session->set_flashdata('success', 'El impuesto ha sido eliminado exitosamente.');
        redirect('Impuestos/index');
    }
}