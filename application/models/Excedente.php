<?php
   class Excedente extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }

        function get_albums()
        {
        $query = $this->db->get('excedente');
        return $query->result();
        }   

        function get_excedentes()
        {
        $query = $this->db->get('excedente');
        return $query->result();
        }
  
   }