<?php
class Socio extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_socios()
    {
        $query = $this->db->get('socio');
        return $query->result();
    }

    function createSocio($data)
    {
        $this->db->insert('socio', $data);
        return $this->db->insert_id();
    }

    function getSocioById($SocioId)
    {
        $this->db->where('id_soc', $SocioId);
        $result = $this->db->get('socio');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function updateSocio($SocioId, $data)
    {
        $this->db->where('id_soc', $SocioId);
        $this->db->update('socio', $data);
        return $this->db->affected_rows();
    }

    function deleteSocio($SocioId)
    {
        $this->db->where('id_soc', $SocioId);
        $this->db->delete('socio');
        return $this->db->affected_rows();
    }
}
