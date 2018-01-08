<?php

class Home extends Public_Controller
{
    function index() {
        $this->data['name'] = 'This is data from Home controller aaaa';
        $this->load->model('product_model');
   		$input = array();
    	$input['limit'] = array(8, 0);
    	$product_new = $this->product_model->get_list($input);
    	$this->data['product_new'] = $product_new;
    	$product_hot = $this->product_model->get_list($input);
    	$this->data['product_hot'] = $product_hot;


        $input2 = array();
        $input2['limit'] = array(6, 0);
        $product_intro = $this->product_model->get_list($input2);
        $this->data['product_intro'] = $product_intro;	
        $this->view('web/home');

    }
}
