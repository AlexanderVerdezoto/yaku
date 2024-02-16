<?php
class Lectura extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_lecturas()
    {
        $query = $this->db->get('lectura');
        return $query->result();
    }

    function createLectura($data)
    {
        $this->db->insert('lectura', $data);
        return $this->db->insert_id();
    }

    function getLecturaById($LecturaId)
    {
        $this->db->where('id_lec', $LecturaId);
        $result = $this->db->get('lectura');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function updateLectura($LecturaId, $data)
    {
        $this->db->where('id_lec', $LecturaId);
        $this->db->update('lectura', $data);
        return $this->db->affected_rows();
    }

    function deleteLectura($LecturaId)
    {
        $this->db->where('id_lec', $LecturaId);
        $this->db->delete('lectura');
        return $this->db->affected_rows();
    }
}
