<?php
class Historial extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_historiales()
    {
        $query = $this->db->get('historial_propietario');
        return $query->result();
    }

    function createHistorial($data)
    {
        $this->db->insert('historial_propietario', $data);
        return $this->db->insert_id();
    }

    function getHistorialById($HistorialId)
    {
        $this->db->where('id_his', $HistorialId);
        $result = $this->db->get('historial_propietario');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function updateHistorial($HistorialId, $data)
    {
        $this->db->where('id_his', $HistorialId);
        $this->db->update('historial_propietario', $data);
        return $this->db->affected_rows();
    }

    function deleteHistorial($HistorialId)
    {
        $this->db->where('id_his', $HistorialId);
        $this->db->delete('historial_propietario');
        return $this->db->affected_rows();
    }
}
