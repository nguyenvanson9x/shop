<?php

class Home extends Public_Controller
{
    function index() {
        $this->data['name'] = 'This is data from Home controller A A';
        $this->view('web/home');
    }
}
