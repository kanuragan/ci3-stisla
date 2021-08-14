<?php defined('BASEPATH') or exit ('No direct access allowed');

class Login extends CI_Controller
{
  function index()
  {
    $data = array(
      'content' => 'login',
    );
    $this->load->view('template/layout',$data);
  }
}