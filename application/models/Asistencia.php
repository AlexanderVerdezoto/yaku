<?php
   class Asistencia extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }

        function get_albums()
        {
        $query = $this->db->get('asistencia');
        return $query->result();
        }   

        function get_asistencias()
        {
        $query = $this->db->get('asistencia');
        return $query->result();
        }
        
        function createAsistencia($data){
          $this->db->insert('asistencia', $data);
          return $this->db->insert_id();
      }
  
      function getAsistenciaById($AsistenciaId){
          $this->db->where('id_asi', $AsistenciaId);
          $result = $this->db->get('asistencia');
          if ($result->num_rows() > 0) {
              return $result->row();
          } else {
              return false;
          }
      }
  
      function updateAsistencia($AsistenciaId, $data){
          $this->db->where('id_asi', $AsistenciaId);
          $this->db->update('asistencia', $data);
          return $this->db->affected_rows();
      }
  
      function deleteAsistencia($AsistenciaId){
          $this->db->where('id_asi', $AsistenciaId);
          $this->db->delete('asistencia');
          return $this->db->affected_rows();
      }
  
   }