<?php
class Configuracion extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_configuraciones()
    {
        $query = $this->db->get('configuracion');
        return $query->result();
    }

    function createConfiguracion($data)
    {
        $this->db->insert('configuracion', $data);
        return $this->db->insert_id();
    }

    function getConfiguracionById($ConfiguracionId)
    {
        $this->db->where('id_con', $ConfiguracionId);
        $result = $this->db->get('configuracion');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function updateConfiguracion($ConfiguracionId, $data)
    {
        $this->db->where('id_con', $ConfiguracionId);
        $this->db->update('configuracion', $data);
        return $this->db->affected_rows();
    }

    function deleteConfiguracion($ConfiguracionId)
    {
        $this->db->where('id_con', $ConfiguracionId);
        $this->db->delete('configuracion');
        return $this->db->affected_rows();
    }
}
