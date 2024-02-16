<?php
class Ruta extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_rutas()
    {
        $query = $this->db->get('ruta');
        return $query->result();
    }

    function createRuta($data)
    {
        $this->db->insert('ruta', $data);
        return $this->db->insert_id();
    }

    function getRutaById($RutaId)
    {
        $this->db->where('id_rut', $RutaId);
        $result = $this->db->get('ruta');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function updateRuta($RutaId, $data)
    {
        $this->db->where('id_rut', $RutaId);
        $this->db->update('ruta', $data);
        return $this->db->affected_rows();
    }

    function deleteRuta($RutaId)
    {
        $this->db->where('id_rut', $RutaId);
        $this->db->delete('ruta');
        return $this->db->affected_rows();
    }
}
