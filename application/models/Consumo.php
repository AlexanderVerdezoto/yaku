<?php
   class Consumo extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }

        function get_albums()
        {
        $query = $this->db->get('consumo');
        return $query->result();
        }   

        function get_consumos()
        {
        $query = $this->db->get('consumo');
        return $query->result();
        }
  
   }