<?php defined('BASEPATH') or exit ('No direct access allowed');

class About extends CI_Controller {
  function index(){
    $data = array(
      'navbar'  => true,
      'sidebar' => true,
      'content' => 'show',
      'footer'  => true,
    );
    $this->load->view('template/layout',$data);
  }

  function buttonAjax() {
    $name = $this->input->post('name');
    if($name == 'jaka') {
      $data = array(
        'response' => 'success',
        'msg'      => 'successfully with name jaka',
      );
    } else {
      $data = array(
        'response' => 'error',
        'msg'      => 'failed with name not jaka',
      );
    }
    echo json_encode($data);    
  }
}