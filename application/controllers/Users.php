<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
    public function register() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('users/register');
        } else {
            $password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            $user = [
                'username' => $this->input->post('username'),
                'password' => $password,
                'email' => $this->input->post('email')
            ];
			$ci = get_instance();
			$ci->load->model('User_model');
			$ci->User_model->register($user);
			$this->session->set_flashdata('user_registered', 'You are now registered and can log in');
			
            redirect('users/login');
        }
    }

    public function login() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('users/login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
			$ci = get_instance();
            $ci->load->model('User_model');
			$user = $ci->User_model->login($username, $password);

            if ($user) {
                $this->session->set_userdata('user_id', $user->id);
                redirect('bookmarks');
            } else {
                $this->session->set_flashdata('login_failed', 'Invalid login');
                redirect('users/login');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect('users/login');
    }
}
?>
