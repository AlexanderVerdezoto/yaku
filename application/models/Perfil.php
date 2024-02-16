<?php
class Perfil extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_perfiles()
    {
        $query = $this->db->get('perfil');
        return $query->result();
    }

    function createPerfil($data)
    {
        $this->db->insert('perfil', $data);
        return $this->db->insert_id();
    }

    function getPerfilById($PerfilId)
    {
        $this->db->where('id_per', $PerfilId);
        $result = $this->db->get('perfil');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function updatePerfil($PerfilId, $data)
    {
        $this->db->where('id_per', $PerfilId);
        $this->db->update('perfil', $data);
        return $this->db->affected_rows();
    }

    function deletePerfil($PerfilId)
    {
        $this->db->where('id_per', $PerfilId);
        $this->db->delete('perfil');
        return $this->db->affected_rows();
    }
}
