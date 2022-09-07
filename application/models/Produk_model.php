<?php

class Produk_model extends CI_Model
{

    public function get_entries()
    {
        $query = $this->db->get('produk');
        return $query->result();
    }

    public function insert_entry($data)
    {
        return $this->db->insert('produk', $data);
    }

    public function delete_entry($id)
    {
        return $this->db->delete('produk', array('id' => $id));
    }

    public function single_entry($id)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }

    public function update_entry($id, $data)
    {
        return $this->db->update('produk', $data, array('id' => $id));
    }
}
