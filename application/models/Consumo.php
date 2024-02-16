<?php
class Consumo extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_consumos()
    {
        $query = $this->db->get('consumo');
        return $query->result();
    }

    function createConsumo($data)
    {
        $this->db->insert('consumo', $data);
        return $this->db->insert_id();
    }

    function getConsumoById($ConsumoId)
    {
        $this->db->where('id_consumo', $ConsumoId);
        $result = $this->db->get('consumo');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function updateConsumo($ConsumoId, $data)
    {
        $this->db->where('id_consumo', $ConsumoId);
        $this->db->update('consumo', $data);
        return $this->db->affected_rows();
    }

    function deleteConsumo($ConsumoId)
    {
        $this->db->where('id_consumo', $ConsumoId);
        $this->db->delete('consumo');
        return $this->db->affected_rows();
    }
}
