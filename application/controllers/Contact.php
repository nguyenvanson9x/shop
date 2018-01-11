<?php
class Contact extends Public_Controller
{
  function index() {
        $this->view('web/contact');
    }

    function add() {
        $this->load->library('form_validation');
        $this->load->helper('form');
        
    }
}
?>