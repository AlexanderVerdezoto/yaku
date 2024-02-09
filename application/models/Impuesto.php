<?php
   class Impuesto extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }

        function get_albums()
        {
        $query = $this->db->get('impuesto');
        return $query->result();
        }   

        function get_impuestos()
        {
        $query = $this->db->get('impuesto');
        return $query->result();
        }

        
     
   }//Cierre de la clase (No borrar)
//