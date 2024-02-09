<?php
   class Lectura extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }

        function get_albums()
        {
        $query = $this->db->get('lectura');
        return $query->result();
        }   

        function get_lecturas()
        {
        $query = $this->db->get('lectura');
        return $query->result();
        }

        
        
     
   }//Cierre de la clase (No borrar)
//