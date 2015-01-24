<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_model extends CI_Model
{
    public function get_menu()
    {
        $this->db->select('label, permalink');
        $query = $this->db->get('pages');
        return $query->result_array();
    }

    public function get_page_title($permalink)
    {
        $this->db->select('id, title, body_class');
        $query = $this->db->get_where('pages', array('permalink' => $permalink));
        return $query->row();
    }

    public function get_content($permalink)
    {
        $this->db->select('id, article_id');
        $query = $this->db->get_where('pages', array('permalink' => $permalink));
        $page_id = $query->row();
        $this->db->select('text');
        $article = $this->db->get_where('articles', array('id' => $page_id->article_id));
        return $article->row();
    }
}