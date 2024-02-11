<?php
   class Historial extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }

        function get_albums()
        {
        $query = $this->db->get('historial');
        return $query->result();
        }   

        function get_historiales()
        {
        $query = $this->db->get('historial');
        return $query->result();
        }
  
   }