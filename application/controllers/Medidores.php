<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medidores extends CI_Controller {


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
        $this->load->model('Medidor');
        $data['medidores'] = $this->Medidor->get_medidores();
        $this->load->view('header');
		$this->load->view('Medidores/index' , $data);
        // $this->load->view('foote	r');

	}

	public function Agregar()
	{
		$this->load->model('Medidor');
		$data['rutas'] = $this->Medidor->get_rutas();
		$data['tarifas'] = $this->Medidor->get_tarifas();

		$this->load->view('header');
		$this->load->view('Medidores/Agregar' , $data);
		// $this->load->view('footer');

	}

	public function upload()
	{
		$data = array(
			'fk_id_rut' => $this->input->post('fk_id_rut'),
			'fk_id_tar' => $this->input->post('fk_id_tar'),
			'numero_med' => $this->input->post('numero_med'),
			'serie_med' => $this->input->post('serie_med'),
			'marca_med' => $this->input->post('marca_med'),
			'observacion_med' => $this->input->post('observacion_med'),
			'estado_med' => $this->input->post('estado_med'),
			'foto_med' => $this->input->post('foto_med'),
			'lectura_inicial_med' => $this->input->post('lectura_inicial_med')
		);	

		//generate method to upload file into foro_med
		$config['upload_path'] = '.assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 100;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto_med'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('Medidores/Agregar', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('Medidores/Agregar', $data);
		}



		$this->load->model('Medidor');
		$this->Medidor->insert_medidor( $data );
		if($this->db->affected_rows() > 0){
			redirect('Medidores/index');
		}

	}


	public function delete($id)
	{
		$this->load->model('Medidor');
		$this->Medidor->delete_medidor($id);
		if($this->db->affected_rows() > 0){
			redirect('Medidores/index');
		}
	}

	

	public function update_medidor($id_med){
		$datosMedidor = array(
			'fk_id_rut' => $this->input->post('fk_id_rut'),
			'fk_id_tar' => $this->input->post('fk_id_tar'),
			'numero_med' => $this->input->post('numero_med'),
			'serie_med' => $this->input->post('serie_med'),
			'marca_med' => $this->input->post('marca_med'),
			'observacion_med' => $this->input->post('observacion_med'),
			'estado_med' => $this->input->post('estado_med'),
			'foto_med' => $this->input->post('foto_med'),
			'lectura_inicial_med' => $this->input->post('lectura_inicial_med')
			
		);
	
		
		$this->load->model('Medidor');
	
		if ($this->Medidor -> update_medidor( $id_med,$datosMedidor)) {
			redirect('medidores/index', 'refresh');
			$resultado = array(
				"estado" => "ok",
				"mensaje" => "medidor updated successfully"
			);
			
		} else {
			$resultado = array(
				"estado" => "error"
			);
		}
		
		echo json_encode($resultado);
	}
	
	public function update($id)
	{
		$this->load->model('Medidor');
		$data['rutas'] = $this->Medidor->get_rutas();
		$data['tarifas'] = $this->Medidor->get_tarifas();
		$data['medidor'] = $this->Medidor->get_medidor($id);
		$this->load->view('header');
		
		$this->load->view('medidores/edit', $data);
		$this->load->view('footer');
	}

   
    
}
