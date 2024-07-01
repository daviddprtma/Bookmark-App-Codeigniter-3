<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bookmarks extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('users/login');
        }
        $this->load->library('pagination');
    }

    public function index() {
        $config = array();
        $config["base_url"] = site_url('bookmarks/index');
        $config["total_rows"] = $this->db->where('user_id', $this->session->userdata('user_id'))->count_all_results('bookmarks');
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$ci = get_instance();
		$ci->load->model('Bookmark_model');
		$data['bookmarks'] = $ci->Bookmark_model->get_bookmarks($this->session->userdata('user_id'), $config["per_page"], $page);
		$data['links'] = $this->pagination->create_links();

        $this->load->view('bookmarks/index', $data);
    }

    public function add() {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('bookmarks/add');
        } else {
            $bookmark = [
                'user_id' => $this->session->userdata('user_id'),
                'title' => $this->input->post('title'),
                'url' => $this->input->post('url'),
                'tags' => $this->input->post('tags')
            ];
            
			$ci = get_instance();
			$ci->load->model('Bookmark_model');
			$ci->Bookmark_model->add_bookmark($bookmark);

            redirect('bookmarks');
        }
    }

    public function delete($id) {
		$ci = get_instance();
		$ci->load->model('Bookmark_model');
		$ci->Bookmark_model->delete_bookmark($id);
		
        redirect('bookmarks');
    }

    public function search() {
		$tag = $this->input->post('tag');
		$ci = get_instance();
		$ci->load->model('Bookmark_model');
		$data['bookmarks'] = $ci->Bookmark_model->search_bookmarks($this->session->userdata('user_id'), $tag);
		$this->load->view('bookmarks/index', $data);
    }

    public function edit($id) {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');

        if ($this->form_validation->run() === FALSE) {
			$ci = get_instance();
			$ci->load->model('Bookmark_model');
			$data['bookmark'] = $ci->Bookmark_model->get_bookmark($id);
			$this->load->view('bookmarks/edit', $data);
		
        } else {
            $bookmark = [
                'title' => $this->input->post('title'),
                'url' => $this->input->post('url'),
                'tags' => $this->input->post('tags')
            ];
            $ci = get_instance();
			$ci->load->model('Bookmark_model');
			$ci->Bookmark_model->update_bookmark($id, $bookmark);
            redirect('bookmarks');
        }
    }
}
?>
