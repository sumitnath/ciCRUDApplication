<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posts extends CI_Controller{

  function __construct(){
    parent::__construct();
   $this->load->model('post');
   $this->load->library('form_validation');
 
  }

function index(){

  $data['posts'] = $this->post->get_post();
  $this->load->view('index',$data);
}

function post_detail($id){
  if(!empty($id)){
    $data['posts'] = $this->post->get_post($id);
   $this->load->view('view',$data);
  }else{
    redirect('posts');
  }
}

function addPost(){
  $data['posts'] = $this->post->get_post();
  $data['action'] = 'Add' ;
  $this->form_validation->set_rules('title','Title','required');
  $this->form_validation->set_rules('description','Content','required');
  $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    if($this->form_validation->run()== true){
      $postData = array(
        'title' => $this->input->post('title'),
        'description'=> $this->input->post('description')
        );
    $insert= $this->post->insertPost($postData);
      if($insert){
        $this->session->set_flashdata('success','Successfully post added');
      redirect('posts/index');
      }else{
        $this->session->set_flashdata('error','Post failed to added');
        redirect('posts/index');
      }
  }
  $data['error']= 'Failed to insert';
  $this->load->view('add-edit', $data);

  }

function edit($id){
  $data['posts'] = $this->post->get_post($id);
  $data['action'] = 'Edit' ;
  if($this->input->post('postSubmit')){
  $this->form_validation->set_rules('title','Title','required');
  $this->form_validation->set_rules('description','Content','required');
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
      if($this->form_validation->run()== true){
      $postData = array(
      'title' => $this->input->post('title'),
      'description'=> $this->input->post('description')
      );
      $update= $this->post->updatePost($postData,$id);
        if($update){
          $this->session->set_flashdata('success','Successfully post Updated');
        redirect('posts/index');
        }else{
          $this->session->set_flashdata('error','Post failed to Update');
        $data['error']= 'Failed to update';
        }
      }
  }
 $this->load->view('add-edit',$data);
}

function delete($id){
  $delete= $this->post->delete($id);
  if($delete){
    $this->session->set_flashdata('success','Successfully post deleted');
    }else{
    $this->session->set_flashdata('error','Post failed to delete');
  }
  redirect('posts');
}



}




?>
