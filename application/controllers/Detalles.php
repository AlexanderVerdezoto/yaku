<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detalles extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Detalle');
    }

    public function index()
    {
        $data['detalles'] = $this->Detalle->get_detalles();
        $this->load->view('header');
        $this->load->view('Detalles/index', $data);
        $this->load->view('footer');
    }
   
    public function add(){
        $this->load->view('header');
        $this->load->view('Detalles/add');
        $this->load->view('footer');
    }

    public function create(){
        $data = array(
            'cantidad_det' => $this->input->post('cantidad_det'),
            'detalle_det' => $this->input->post('detalle_det'),
            'valor_unitario_det' => $this->input->post('valor_unitario_det'),
            'subtotal_det' => $this->input->post('subtotal_det'),
            'iva_det' => $this->input->post('iva_det')
        );

        $this->Detalle->createDetalle($data);
        $this->session->set_flashdata('success', 'El detalle a sido creado exitosamente.');
        redirect('Detalles/index');
    }

    public function edit($DetalleId){
        $data['detalle'] = $this->Detalle->getDetalleById($DetalleId);

        $this->load->view('header');
        $this->load->view('Detalles/edit', $data);
        $this->load->view('footer');
    }

    public function update($DetalleId){
        $data = array(
            'cantidad_det' => $this->input->post('cantidad_det'),
            'detalle_det' => $this->input->post('detalle_det'),
            'valor_unitario_det' => $this->input->post('valor_unitario_det'),
            'subtotal_det' => $this->input->post('subtotal_det'),
            'iva_det' => $this->input->post('iva_det')
        );

        $this->Detalle->updateDetalle($DetalleId, $data);
        $this->session->set_flashdata('success', 'El detalle a sido actualizado exitosamente.');
        redirect('Detalles/index');
    }

    public function delete($DetalleId){
        $this->Detalle->deleteDetalle($DetalleId);
        $this->session->set_flashdata('success', 'El detalle a sido eliminado exitosamente.');
        redirect('Detalles/index');
    }  
}
