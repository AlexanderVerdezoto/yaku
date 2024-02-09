<?php
   class Evento extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }

        function get_albums()
        {
        $query = $this->db->get('evento');
        return $query->result();
        }   

        function get_eventos()
        {
        $query = $this->db->get('evento');
        return $query->result();
        }
  
   }