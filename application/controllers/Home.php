<?php

class Home extends Public_Controller
{

    function __construct() {
        parent::__construct();
        // load model
        $this->load->model('news_model');
        $this->load->model('account_model');
    }
    function index() {
        
        $this->data['name'] = 'This is data from Home controller aaaa';
        $this->load->model('product_model');
           
        $input = array();
        $input2 = array();
    	$input['limit'] = array(8, 0);
        $input['order'] = array('create_at', 'DESC');
    	$product_new = $this->product_model->get_list($input);
    	$this->data['product_new'] = $product_new;
        $input2['order'] = array('view', 'DESC');
        $input2['limit'] = array(8, 0);
    	$product_hot = $this->product_model->get_list($input2);
        $this->data['product_hot'] = $product_hot;

        $sql = "SELECT * FROM news ORDER by news.view DESC LIMIT 10";
        $this->data['hotNews'] = $this->news_model->query($sql);
      
        $input3 = array();
        $product_intro = $this->product_model->get_list($input3);
        $this->data['product_intro'] = $product_intro;	
        $this->view('web/home');

    }
}
