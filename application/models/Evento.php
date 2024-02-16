<?php
class Evento extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_eventos()
    {
        $query = $this->db->get('evento');
        return $query->result();
    }

    function createEvento($data)
    {
        $this->db->insert('evento', $data);
        return $this->db->insert_id();
    }

    function getEventoById($EventoId)
    {
        $this->db->where('id_eve', $EventoId);
        $result = $this->db->get('evento');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function updateEvento($EventoId, $data)
    {
        $this->db->where('id_eve', $EventoId);
        $this->db->update('evento', $data);
        return $this->db->affected_rows();
    }

    function deleteEvento($EventoId)
    {
        $this->db->where('id_eve', $EventoId);
        $this->db->delete('evento');
        return $this->db->affected_rows();
    }
}
