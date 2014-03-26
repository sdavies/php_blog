<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Comment extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
  }

  public function edit() {
    $this->db->where('entry_id', $this->uri->segment(3));
    $rs = $this->db->get('comments');
    $data['comments'] = [];
    if ($rs->num_rows() >0){
      $data['comments'] = $rs->result();
    }
    $this->load->view('comments/comment_edit', $data);
  }

  public function save() {
    $this->db->insert('comments', $_POST);
    redirect('blog/show/'.$_POST['entry_id']);
  }
}
