<?php

class Search extends Public_Controller
{
    function index() {
        // load model
        $this->load->model('product_model');

        // get query
        $query = $this->input->get('query');
        // for security, sql injection
        $query = trim(preg_replace('/[\s\/]+/mu', ' ', str_replace('-', ' ', preg_replace('/([^\pL\.\/\-0-9\ ]+)/u', '', strip_tags($query)))));
        $this->data['query'] = $query;

        // get data
        $input['like'] = array('name', $query);
        $products = $this->product_model->get_list($input);
        $this->data['products'] = $products;

        // load view
        $this->view('web/search');
    }
}
