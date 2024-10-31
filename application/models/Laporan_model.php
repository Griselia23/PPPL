<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

    // Retrieve penjualan data with total calculated
    public function get_penjualan_data() {
        // Include 'id' in the select statement
        $this->db->select('id, user, barang, kode_barang, jumlah, harga, tanggal');
        $query = $this->db->get('tb_penjualan');
        $result = $query->result();

        // Compute totals
        foreach ($result as $item) {
            $item->total = $this->calculate_total($item->harga, $item->jumlah);
        }

        return $result;
    }

    // Retrieve pembelian data with total calculated
    public function get_pembelian_data() {
        // Include 'id' in the select statement
        $this->db->select('id, user, barang, jumlah, harga, tanggal');
        $query = $this->db->get('tb_pembelian');
        $result = $query->result();

        // Compute totals
        foreach ($result as $item) {
            $item->total = $this->calculate_total($item->harga, $item->jumlah);
        }

        return $result;
    }

    // Update penjualan record
    public function update_penjualan($data) {
        // Calculate total before updating
        $data['total'] = $this->calculate_total($data['harga'], $data['jumlah']);
        $this->db->where('id', $data['id']);
        return $this->db->update('tb_penjualan', $data);
    }
    
    // Update pembelian record
    public function update_pembelian($data) {
        // Calculate total before updating
        $data['total'] = $this->calculate_total($data['harga'], $data['jumlah']);
        $this->db->where('id', $data['id']);
        return $this->db->update('tb_pembelian', $data);
    }

    // Calculate total based on harga and jumlah
    public function calculate_total($harga, $jumlah) {
        // Ensure values are numeric and calculate total
        return $harga * $jumlah;
    }

    // Get penjualan record by ID
    public function get_penjualan_by_id($id) {
        return $this->db->get_where('tb_penjualan', ['id' => $id])->row();
    }
    
    // Get pembelian record by ID
    public function get_pembelian_by_id($id) {
        return $this->db->get_where('tb_pembelian', ['id' => $id])->row();
    }
    
    // Delete penjualan record by ID
    public function delete_penjualan($id) {
        $this->db->where('id', $id);
        return $this->db->delete('tb_penjualan');
    }
    
    // Delete pembelian record by ID
    public function delete_pembelian($id) {
        $this->db->where('id', $id);
        return $this->db->delete('tb_pembelian');
    }

    // Get total values for penjualan and pembelian
    public function get_totals() {
        $total_penjualan = $this->db->select_sum('total')->get('tb_penjualan')->row()->total;
        $total_pembelian = $this->db->select_sum('total')->get('tb_pembelian')->row()->total;
        $keuntungan = $total_penjualan - $total_pembelian;
        $target = 500000; // Your target value
    
        return [
            'total_penjualan' => $total_penjualan,
            'total_pembelian' => $total_pembelian,
            'keuntungan' => $keuntungan,
            'target' => $target
        ];
    }

    public function get_all_pembelian() {
        $query = $this->db->get('tb_pembelian');
        return $query->result();
    }

    public function get_pembelian_by_date($date) {
        $this->db->where('tanggal', $date);
        $query = $this->db->get('tb_pembelian');
        return $query->result();
    }

    public function get_all_penjualan() {
        // Query to get all penjualan data
        $this->db->select('*');
        $this->db->from('tb_penjualan'); // Change 'penjualan' to your actual table name
        $query = $this->db->get();
        return $query->result();
    }

    public function get_penjualan_by_date($date) {
        // Query to get penjualan data by date
        $this->db->select('*');
        $this->db->from('tb_penjualan'); // Change 'penjualan' to your actual table name
        $this->db->where('DATE(tanggal)', $date); // Adjust 'tanggal' to your actual date column
        $query = $this->db->get();
        return $query->result();
    }
}
