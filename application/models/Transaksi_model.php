<?php

class Transaksi_model extends CI_Model
{

    function get_join(){
        $query = $this->db->select('transaksi.id as id, produk.id as id_product, pelanggan.id, karyawan.id, transaksi.jumlah_produk, 
                                     transaksi.harga_total, transaksi.created_at, transaksi.updated_at')
                ->from('transaksi');
        return $query->$result;
    }

    function getDataProduk(){
        $query = $this->db->get('produk');
        return $query->result();
    }

    function getDataPelanggan(){
        $query = $this->db->get('pelanggan');
        return $query->result();
    }

    function getDataKaryawan(){
        $query = $this->db->get('karyawan');
        return $query->result();
    }

    public function get_entries()
    {
        $query = $this->db->get('transaksi');
        return $query->result();
    }

    public function insert_entry($data)
    {
        return $this->db->insert('transaksi', $data);
    }

    public function delete_entry($id)
    {
        return $this->db->delete('transaksi', array('id' => $id));
    }

    public function single_entry($id)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }

    public function update_entry($id, $data)
    {
        return $this->db->update('transaksi', $data, array('id' => $id));
    }
}
