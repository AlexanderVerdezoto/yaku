<?php
class Detalle extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_detalles()
    {
        $query = $this->db->get('detalle');
        return $query->result();
    }

    function createDetalle($data)
    {
        $this->db->insert('detalle', $data);
        return $this->db->insert_id();
    }

    function getDetalleById($DetalleId)
    {
        $this->db->where('id_det', $DetalleId);
        $result = $this->db->get('detalle');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function updateDetalle($DetalleId, $data)
    {
        $this->db->where('id_det', $DetalleId);
        $this->db->update('detalle', $data);
        return $this->db->affected_rows();
    }

    function deleteDetalle($DetalleId)
    {
        $this->db->where('id_det', $DetalleId);
        $this->db->delete('detalle');
        return $this->db->affected_rows();
    }
}
