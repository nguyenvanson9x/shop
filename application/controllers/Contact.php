<?php
class Contact extends Public_Controller
{
  function index() {
        $this->data['name'] = 'This is data from Contact controller';
        $this->view('web/contact');
    }
}
?>