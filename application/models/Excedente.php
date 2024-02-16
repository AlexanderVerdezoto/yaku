<?php
class Excedente extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_excedentes()
    {
        $query = $this->db->get('excedente');
        return $query->result();
    }

    function createExcedente($data)
    {
        $this->db->insert('excedente', $data);
        return $this->db->insert_id();
    }

    function getExcedenteById($ExcedenteId)
    {
        $this->db->where('id_ex', $ExcedenteId);
        $result = $this->db->get('excedente');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function updateExcedente($ExcedenteId, $data)
    {
        $this->db->where('id_ex', $ExcedenteId);
        $this->db->update('excedente', $data);
        return $this->db->affected_rows();
    }

    function deleteExcedente($ExcedenteId)
    {
        $this->db->where('id_ex', $ExcedenteId);
        $this->db->delete('excedente');
        return $this->db->affected_rows();
    }
}
