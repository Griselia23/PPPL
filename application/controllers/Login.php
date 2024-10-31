<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model'); // Load User_model
        $this->load->library('session'); // Ensure session library is loaded
    }

    public function index() {
        $this->load->view('login'); // Load the login view
    }

    public function process_login() {
        $display_name = $this->input->post('display_name'); // Change to 'display_name' from your form
        $password = $this->input->post('password');
    
        // Validate user with display_name
        $user = $this->User_model->validate_user($display_name, $password); // Validate user through model
    
        if ($user) {
            // Set session data
            $this->session->set_userdata('npk', $user->username); // Store NPK (from username field) in session
            $this->session->set_userdata('display_name', $user->display_name); // Store display name in session
            redirect('dashboard'); // Redirect to dashboard if login is successful
        } else {
            $this->session->set_flashdata('error', 'Invalid display name or password'); // Set error message
            redirect('login'); // Redirect back to login page if login fails
        }
    }

    public function logout() {
        $this->session->unset_userdata('npk'); // Clear NPK from session
        $this->session->unset_userdata('display_name'); // Clear display name from session
        redirect('login'); // Redirect to login page after logout
    }
}
