<?php defined('BASEPATH') or exit ('No direct access allowed');

class Forgot extends CI_Controller
{
  function index()
  {
    $data = array(
      'content' => 'forgot',
    );
    $this->load->view('template/layout',$data);
  }
}