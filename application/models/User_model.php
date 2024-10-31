<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function validate_user($display_name, $password) {
        $this->db->where('display_name', $display_name); // Check against display_name
        $query = $this->db->get('users'); // Make sure your table is named 'users'
        
        if ($query->num_rows() == 1) {
            $user = $query->row();
            if (password_verify($password, $user->password)) { // Check hashed password
                return $user;
            }
        }
        
        return false; // Return false if credentials are incorrect
    }
    
    public function insert_user($data) {
        return $this->db->insert('users', $data); // Ensure correct table
    }
}
