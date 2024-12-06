<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setuser extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Setuser_model');
        $this->load->library('session');
        $this->load->helper('url');
    }
    private function check_session() {
        if (!$this->session->userdata('npk')) {
            redirect('login'); 
            exit(); // Ensure no further code is executed after redirect
        }
    }

    public function index() {
        $this->check_session();
        $data['users'] = $this->Setuser_model->get_all_users();
        $this->load->view('setuser', $data);
    }

    public function store() {
        $username = $this->input->post('username');
        $display_name = $this->input->post('display_name');
        $password = $this->input->post('password');

        // Check if username and display name are the same
        if ($username === $display_name) {
            $this->session->set_flashdata('error', 'Username (NPK) and Display Name cannot be the same!');
            redirect('setuser');
        }

        // Check if the username already exists
        if ($this->Setuser_model->username_exists($username, null)) {
            $this->session->set_flashdata('error', 'Username already exists. Please choose a different one!');
            redirect('setuser');
        }

        // Save user to the database
        if ($this->Setuser_model->add_user($username, $display_name, $password)) {
            $this->session->set_flashdata('success', 'User added successfully!');
        } else {
            $this->session->set_flashdata('error', 'Failed to add user. Please try again.');
        }
        redirect('setuser');
    }

    public function edit($id) {
        $data['user'] = $this->Setuser_model->get_user_by_id($id);
        $this->load->view('edit_user', $data); // Create edit_user.php for this view
    }

    public function update($id) {
        $username = $this->input->post('username');
        $display_name = $this->input->post('display_name');
        $password = $this->input->post('password');
    
        
        if ($username === $display_name) {
            $this->session->set_flashdata('error', 'Username (NPK) and Display Name cannot be the same!');
            redirect('setuser/edit/' . $id);
        }
    
        // Check if the username already exists for a different user
        if ($this->Setuser_model->username_exists($username, $id)) {
            $this->session->set_flashdata('error', 'Username already exists. Please choose a different one!');
            redirect('setuser/edit/' . $id);
        }
    
        // Update user in the database
        if ($this->Setuser_model->update_user($id, $username, $display_name, $password)) {
            $this->session->set_flashdata('success', 'User updated successfully!');
        } else {
            $this->session->set_flashdata('error', 'Failed to update user. Please try again.');
        }
    
        redirect('setuser'); // Redirect to the main user management page
    }
    
    public function delete($id) {
        if ($this->Setuser_model->delete_user($id)) {
            $this->session->set_flashdata('success', 'User deleted successfully!');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete user. Please try again.');
        }
        redirect('setuser');
    }
    public function logout() {
        $this->session->sess_destroy();
        redirect('login'); 
    }
}
