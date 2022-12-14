<?php

class Pelanggan_model extends CI_Model
{

    public function get_entries()
    {
        $query = $this->db->get('pelanggan');
        return $query->result();
    }

    public function insert_entry($data)
    {
        return $this->db->insert('pelanggan', $data);
    }

    public function delete_entry($id)
    {
        return $this->db->delete('pelanggan', array('id' => $id));
    }

    public function single_entry($id)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }

    public function update_entry($id, $data)
    {
        return $this->db->update('pelanggan', $data, array('id' => $id));
    }
}
