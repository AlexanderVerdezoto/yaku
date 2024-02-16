<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consumos extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Consumo');
    }
    
    public function index()
	{
        $data['consumos'] = $this->Consumo->get_consumos();
        $this->load->view('header');
		$this->load->view('Consumos/index' , $data);
        $this->load->view('footer');
	}

    public function add(){
        $this->load->view('header');
        $this->load->view('Consumos/add');
        $this->load->view('footer');
    }

    public function create(){
        $data = array(
            'anio_consumo' => $this->input->post('anio_consumo'),
            'mes_consumo' => $this->input->post('mes_consumo'),
            'estado_consumo' => $this->input->post('estado_consumo'),
            'numero_mes_consumo' => $this->input->post('numero_mes_consumo'),
            'fecha_vencimiento_consumo' => $this->input->post('fecha_vencimiento_consumo')
        );

        $this->Consumo->createConsumo($data);
        $this->session->set_flashdata('success', 'El consumo ha sido creada exitosamente.');
        redirect('Consumos/index');
    }

    public function edit($ConsumoId){
        $data['consumo'] = $this->Consumo->getConsumoById($ConsumoId);

        $this->load->view('header');
        $this->load->view('Consumos/edit', $data);
        $this->load->view('footer');
    }

    public function update($ConsumoId){
        $data = array(
            'anio_consumo' => $this->input->post('anio_consumo'),
            'mes_consumo' => $this->input->post('mes_consumo'),
            'estado_consumo' => $this->input->post('estado_consumo'),
            'numero_mes_consumo' => $this->input->post('numero_mes_consumo'),
            'fecha_vencimiento_consumo' => $this->input->post('fecha_vencimiento_consumo')
        );

        $this->Consumo->updateConsumo($ConsumoId, $data);
        $this->session->set_flashdata('success', 'El consumo ha sido actualizada exitosamente.');
        redirect('Consumos/index');
    }

    public function delete($ConsumoId){
        $this->Consumo->deleteConsumo($ConsumoId);
        $this->session->set_flashdata('success', 'El consumo ha sido eliminada exitosamente.');
        redirect('Consumos/index');
    }
   
    
}