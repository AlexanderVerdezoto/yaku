<?php
   class Medidor extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
       $this->load->database('ruta');
       $this->load->database('tarifa');
     }

        function get_albums()
        {
        $query = $this->db->get('medidor');
        return $query->result();
        }   

        function get_medidores()
        {
        $query = $this->db->get('medidor');
        return $query->result();
        }

        function insert_medidor($data)
        {
          $this->db->insert('medidor', $data);
        }

        function get_rutas()
        {
          $query = $this->db->get('ruta');
          return $query->result();
        }

        function get_tarifas()
        {
          $query = $this->db->get('tarifa');
          return $query->result();
        }

        function delete_medidor($id)
        {
          $this->db->where('id_med', $id);
          $this->db->delete('medidor');


        }

       
        public function update_medidor( $id,$datos){
          $this->db->where("id_med",$id);
          return $this->db->update("medidor",$datos);
        }

        function get_medidor($id)
        {
          $this->db->where('id_med', $id);
          $query = $this->db->get('medidor');
          return $query->row();
        }
        
        
     
   }//Cierre de la clase (No borrar)
//