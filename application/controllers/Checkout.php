<?php

class Checkout extends Public_Controller
{
    function index() {
        $this->data['name'] = 'This is data from Home controller aaaa';
        $this->view('web/checkout');
    }
}
