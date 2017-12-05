<?php

class Home extends Public_Controller
{
    function index() {
        $this->data['name'] = 'This is data from Home controller';
        $this->view('web/home');
    }
}
