<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Dashboard_model');
        $this->load->helper('url'); // Helpful for redirects
    }

    private function check_session() {
        if (!$this->session->userdata('npk')) {
            redirect('login'); 
            exit(); // Ensure no further code is executed after redirect
        }
    }

    public function index() {
        $this->check_session(); // Check session before loading the view

        // Load the dashboard view
        $this->load->view('dashboard'); // Loads application/views/dashboard.php
    }

    public function submit_penjualan() {
        $data = array(
            'user' => $this->input->post('user'),
            'kode_barang' => $this->input->post('kode_barang'),
            'barang' => $this->input->post('barang'),
            'jumlah' => $this->input->post('jumlah'),
            'harga' => $this->input->post('harga'),
            'tanggal' => $this->input->post('tanggal')
        );

        $this->Dashboard_model->insert_penjualan($data);
        $this->session->set_flashdata('success', 'Data penjualan berhasil ditambahkan!');
        redirect('dashboard'); // Redirect to the dashboard after submission
    }
    
    public function submit_pembelian() {
        $data = array(
            'user' => $this->input->post('user'),
            'barang' => $this->input->post('barang'),
            'jumlah' => $this->input->post('jumlah'),
            'harga' => $this->input->post('harga'),
            'tanggal' => $this->input->post('tanggal')
        );

        $this->Dashboard_model->insert_pembelian($data);
        $this->session->set_flashdata('success', 'Data pembelian berhasil ditambahkan!');
        redirect('dashboard'); // Redirect to the dashboard after submission
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login'); 
    }
}
