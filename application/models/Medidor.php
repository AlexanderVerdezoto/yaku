<?php
   class Medidor extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
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

        
        
     
   }//Cierre de la clase (No borrar)
//