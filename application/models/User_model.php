<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
    public function register($user) {
        return $this->db->insert('users', $user);
    }

    public function login($username, $password) {
        $this->db->where('username', $username);
        $result = $this->db->get('users');

        if ($result->num_rows() == 1) {
            $user = $result->row();
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
    }
}
?>
