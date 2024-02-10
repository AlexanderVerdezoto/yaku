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
  
   }