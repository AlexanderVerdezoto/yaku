<?php
class Usuario extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_usuarios()
    {
        $query = $this->db->get('usuario');
        return $query->result();
    }

    function createUsuario($data)
    {
        $this->db->insert('usuario', $data);
        return $this->db->insert_id();
    }

    function getUsuarioById($UsuarioId)
    {
        $this->db->where('id_usu', $UsuarioId);
        $result = $this->db->get('usuario');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function updateUsuario($UsuarioId, $data)
    {
        $this->db->where('id_usu', $UsuarioId);
        $this->db->update('usuario', $data);
        return $this->db->affected_rows();
    }

    function deleteUsuario($UsuarioId)
    {
        $this->db->where('id_usu', $UsuarioId);
        $this->db->delete('usuario');
        return $this->db->affected_rows();
    }
}
