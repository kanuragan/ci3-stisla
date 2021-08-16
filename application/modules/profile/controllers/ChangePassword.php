<?php defined('BASEPATH') or exit ('NO direct access allowed');

class ChangePassword extends CI_Controller
{
  function index()
  {
    $data = array(
      'navbar'  => false,
      'sidebar' => false,
      'content' => 'change_password',
      'footer'  => false,
    );
    $this->load->view('template/layout', $data);
  }
}