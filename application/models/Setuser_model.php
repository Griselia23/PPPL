<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setuser_model extends CI_Model {

    // Retrieve all users
    public function get_all_users() {
        return $this->db->get('users')->result();
    }

    // Add a new user
    public function add_user($username, $display_name, $password) {
        $data = [
            'username' => $username,
            'display_name' => $display_name,
            'password' => password_hash($password, PASSWORD_BCRYPT) // Hashing password
        ];
        return $this->db->insert('users', $data);
    }

    // Get a user by ID
    public function get_user_by_id($id) {
        return $this->db->get_where('users', ['id' => $id])->row();
    }

    // Update an existing user
    public function update_user($id, $username, $display_name, $password) {
        $data = [
            'username' => $username,
            'display_name' => $display_name,
        ];
        // Only hash and update the password if it's provided
        if (!empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_BCRYPT);
        }
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    // Delete a user
    public function delete_user($id) {
        return $this->db->delete('users', ['id' => $id]);
    }

    // Check if a username already exists
    public function username_exists($username, $current_id) {
        $this->db->where('username', $username);
        $this->db->where('id !=', $current_id); // Exclude current user
        $query = $this->db->get('users');
        return $query->num_rows() > 0; // Returns true if username exists
    }
}
