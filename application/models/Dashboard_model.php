<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function insert_penjualan($data) {
        return $this->db->insert('tb_penjualan', $data);
    }

    public function insert_pembelian($data) {
        return $this->db->insert('tb_pembelian', $data);
    }
}
