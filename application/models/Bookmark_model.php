<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bookmark_model extends CI_Model {
    public function get_bookmarks($user_id, $limit, $offset) {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('bookmarks', $limit, $offset);
        return $query->result();
    }

    public function add_bookmark($bookmark) {

		return $this->db->insert('bookmarks', $bookmark);
    }

    public function delete_bookmark($id) {
        $this->db->where('id', $id);
        return $this->db->delete('bookmarks');
    }

    public function search_bookmarks($user_id, $tag) {
        $this->db->where('user_id', $user_id);
        $this->db->like('tags', $tag);
        $query = $this->db->get('bookmarks');
        return $query->result();
    }

    public function update_bookmark($id, $bookmark) {
		$this->db->where('id', $id);
		return $this->db->update('bookmarks', $bookmark);
    }

	public function get_bookmark($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('bookmarks');
		return $query->row();
	}
}
?>
