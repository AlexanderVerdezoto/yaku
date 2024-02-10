<?php
   class Detalle extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }

        function get_albums()
        {
        $query = $this->db->get('detalle');
        return $query->result();
        }   

        function get_detalles()
        {
        $query = $this->db->get('detalle');
        return $query->result();
        }
  
   }