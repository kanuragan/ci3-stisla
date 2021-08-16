<?php defined('BASEPATH') or exit ('NO direct access allowed');

class Profile extends CI_Controller
{
  function index()
  {
    $data = array(
      'navbar'  => true,
      'sidebar' => true,
      'content' => 'show',
      'footer'  => true,
    );
    $this->load->view('template/layout', $data);
  }
}