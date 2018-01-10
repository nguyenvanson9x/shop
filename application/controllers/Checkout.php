<?php

class Checkout extends Public_Controller
{
    function index() {
        $this->data['name'] = 'This is data from Home controller aaaa';
        $this->view('web/checkout');
    }

    public function ajax() {
        // error array
        $error = array();

        // get data from page
        $user_name      = $this->input->post('user_name');
        $user_email     = $this->input->post('user_email');
        $user_phone     = $this->input->post('user_phone');
        $user_address   = $this->input->post('user_address');
        $coupon         = $this->input->post('coupon');
        $token          = $this->input->post('token');
        $price          = $this->input->post('price');
        $error['price'] = $price;
        // check security by token
        if ($token != md5($price)) {
            $error['error'] = 1;
            $error['token'] = 'Invalid token';
        }

        die (json_encode($error));
    }
}
