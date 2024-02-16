<?php
class Impuesto extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_impuestos()
    {
        $query = $this->db->get('impuesto');
        return $query->result();
    }

    function createImpuesto($data)
    {
        $this->db->insert('impuesto', $data);
        return $this->db->insert_id();
    }

    function getImpuestoById($ImpuestoId)
    {
        $this->db->where('id_imp', $ImpuestoId);
        $result = $this->db->get('impuesto');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function updateImpuesto($ImpuestoId, $data)
    {
        $this->db->where('id_imp', $ImpuestoId);
        $this->db->update('impuesto', $data);
        return $this->db->affected_rows();
    }

    function deleteImpuesto($ImpuestoId)
    {
        $this->db->where('id_imp', $ImpuestoId);
        $this->db->delete('impuesto');
        return $this->db->affected_rows();
    }
}
