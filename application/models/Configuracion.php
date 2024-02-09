<?php
   class Configuracion extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }

        function get_albums()
        {
        $query = $this->db->get('configuracion');
        return $query->result();
        }   

        function get_configuraciones()
        {
        $query = $this->db->get('configuracion');
        return $query->result();
        }
  
   }