<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  function index()
  {
    $data = array(
      'navbar'  => true,
      'sidebar' => true,
      'content' => 'show',
      'footer'  => true,
    );
    $this->load->view('template/layout',$data);
  }
}