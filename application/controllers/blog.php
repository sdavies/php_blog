<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
  }

  public function index() {
    $data['title'] = 'My Blog Title';
    $data['heading'] = 'My Blog Heading';
    $rs = $this->db->get('entries');
    $data['entries'] = [];
    if ($rs->num_rows() >0){
      $data['entries'] = $rs->result();
    }
    $this->load->view('blogs/blog_index', $data);
  }

  public function show() {
    $this->db->where('id', $this->uri->segment(3));
    $data['blog'] = $this->db->get('entries')->result()[0];
    $this->db->where('entry_id', $this->uri->segment(3));
    $rs = $this->db->get('comments');
    $data['comments'] = [];
    if ($rs->num_rows() >0){
      $data['comments'] = $rs->result();
    }
    $this->load->view('blogs/blog_show', $data);
  }

  public function edit() {
    $this->db->where('id', $this->uri->segment(3));
    $rs = $this->db->get('entries');
    if ($rs->num_rows() >0){
      $data['blog'] = $rs->result()[0];
    } else {
      $rs = array (
        'id'    => '',
        'title' => '',
        'body'  => ''
       );
      $data['blog'] =  (object) $rs;
    }
    $this->load->view('blogs/blog_edit', $data);
  }

  public function save() {
    $id =(int) $_POST['id'];
    unset( $_POST['id'] );
    if ($id === 0){
      $this->db->insert('entries', $_POST);
      redirect('blog');
    } else {
      $this->db->where('id', $id);
      $this->db->update('entries', $_POST);
      redirect('blog');
    }
  }

  public function delete() {
    $this->db->where('id', $this->uri->segment(3));
    $this->db->delete('entries');
    redirect('blog');
  }
}
