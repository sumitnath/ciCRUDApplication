<?php
defined('BASEPATH') or exit('No direct script access allowed');

class post extends CI_Model
{

  function get_post($id = '')
  {
    if (!empty($id)) {
      $query = $this->db->get_where('tbl_posts', array('id' => $id));
      return $query->row();
    } else {
      $query = $this->db->get('tbl_posts');
      return $query->result();
    }
  }

  function insertPost($data = array())
  {
    $insert = $this->db->insert('tbl_posts',$data);
    if ($insert) {
     return $this->db->insert_id();
    } else {
      return false;
    }
  }

  function updatePost($data, $id)
  {
    if (!empty($data) && !empty($id)) {
      $update = $this->db->update('tbl_posts', $data, array('id' => $id));
      return $update ? true : false;
    } else {
      return false;
    }
  }

function delete($id){
  $delete = $this->db->delete('tbl_posts',array('id'=>$id));
  return $delete ? true : false;
}






}
