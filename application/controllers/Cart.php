<?php

class Cart extends Public_Controller
{
    function index() {
        $this->data['name'] = 'This is data from Home controller aaaa';
        $this->view('web/cart');
    }
}
