<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Load PhpSpreadsheet
require_once FCPATH . 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Laporan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Laporan_model');
    }

    public function index() {
        $data['penjualan_data'] = $this->Laporan_model->get_penjualan_data();
        $data['pembelian_data'] = $this->Laporan_model->get_pembelian_data();
        $data['totals'] = $this->Laporan_model->get_totals(); // Fetch totals
        $this->load->view('laporan', $data);
    }

    public function update_penjualan() {
        $data = $this->input->post();
        
        if ($this->Laporan_model->update_penjualan($data)) {
            $this->session->set_flashdata('message', 'Data successfully updated!');
        } else {
            $this->session->set_flashdata('message', 'Failed to update data!');
        }
        
        redirect('laporan'); // Redirect back to laporan view
    }
    
    public function delete_penjualan($id) {
        if ($this->Laporan_model->delete_penjualan($id)) {
            $this->session->set_flashdata('message', 'Data successfully deleted!');
        } else {
            $this->session->set_flashdata('message', 'Failed to delete data!');
        }
        
        redirect('laporan'); // Redirect back to laporan view
    }

    public function update_pembelian() {
        $data = $this->input->post();
        
        if ($this->Laporan_model->update_pembelian($data)) {
            $this->session->set_flashdata('message', 'Data successfully updated!');
        } else {
            $this->session->set_flashdata('message', 'Failed to update data!');
        }
        
        redirect('laporan'); // Redirect back to laporan view
    }
    
    public function delete_pembelian($id) {
        if ($this->Laporan_model->delete_pembelian($id)) {
            $this->session->set_flashdata('message', 'Data successfully deleted!');
        } else {
            $this->session->set_flashdata('message', 'Failed to delete data!');
        }
        
        redirect('laporan'); // Redirect back to laporan view
    }

    // Export all data to Excel
    public function export_all() {
        $data = $this->Laporan_model->get_all_pembelian(); // Fetch all pembelian data
        $this->generate_excel($data, 'All_Pembelian.xlsx');
    }

    // Generate Excel file
    private function generate_excel($data, $filename) {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set headers
        $sheet->setCellValue('A1', 'User');
        $sheet->setCellValue('B1', 'Barang');
        $sheet->setCellValue('C1', 'Jumlah');
        $sheet->setCellValue('D1', 'Harga');
        $sheet->setCellValue('E1', 'Total');
        $sheet->setCellValue('F1', 'Tanggal');

        // Fill data
        $row = 2;
        foreach ($data as $item) {
            $jumlah = $item->jumlah; // Ensure these properties exist
            $harga = $item->harga;
            $total = $jumlah * $harga; // Calculate total

            $sheet->setCellValue('A' . $row, $item->user);
            $sheet->setCellValue('B' . $row, $item->barang);
            $sheet->setCellValue('C' . $row, $jumlah);
            $sheet->setCellValue('D' . $row, $harga);
            $sheet->setCellValue('E' . $row, $total);
            $sheet->setCellValue('F' . $row, $item->tanggal);
            $row++;
        }

        // Set headers for download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        // Write file to output
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit();
    }

    public function export_all_penjualan() {
        $data = $this->Laporan_model->get_all_penjualan(); // Fetch all penjualan data
        $this->generate_excel_penjualan($data, 'All_Penjualan.xlsx');
    }

    // Export penjualan data by date to Excel
    public function export_by_date_penjualan() {
        $date = $this->input->post('export_date');
        $data = $this->Laporan_model->get_penjualan_by_date($date); // Fetch penjualan data by date
        $this->generate_excel_penjualan($data, 'Penjualan_' . $date . '.xlsx');
    }

    // Generate Excel for penjualan
    private function generate_excel_penjualan($data, $filename) {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set headers
        $sheet->setCellValue('A1', 'User');
        $sheet->setCellValue('B1', 'Barang');
        $sheet->setCellValue('C1', 'Kode Barang');
        $sheet->setCellValue('D1', 'Jumlah');
        $sheet->setCellValue('E1', 'Harga');
        $sheet->setCellValue('F1', 'Total');
        $sheet->setCellValue('G1', 'Tanggal');

        // Fill data
        $row = 2;
        foreach ($data as $item) {
            $sheet->setCellValue('A' . $row, $item->user);
            $sheet->setCellValue('B' . $row, $item->barang);
            $sheet->setCellValue('C' . $row, $item->kode_barang);
            $sheet->setCellValue('D' . $row, $item->jumlah);
            $sheet->setCellValue('E' . $row, $item->harga);
            $sheet->setCellValue('F' . $row, $item->total);
            $sheet->setCellValue('G' . $row, $item->tanggal);
            $row++;
        }

        // Set headers for download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        // Write file to output
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit();
    }
}
