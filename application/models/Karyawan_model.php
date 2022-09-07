<?php

class Karyawan_model extends CI_Model
{

    public function get_entries()
    {
        $query = $this->db->get('karyawan');
        return $query->result();
    }

    public function insert_entry($data)
    {
        return $this->db->insert('karyawan', $data);
    }

    public function delete_entry($id)
    {
        return $this->db->delete('karyawan', array('id' => $id));
    }

    public function single_entry($id)
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }

    public function update_entry($id, $data)
    {
        return $this->db->update('karyawan', $data, array('id' => $id));
    }
}
