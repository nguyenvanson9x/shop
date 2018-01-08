<?php

class Product extends MY_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
    }
    function catalog()
    {
    	$id = intval($this->uri->rsegment(3));
    	$this->load->model("supplier_model");
    	$catalog = $this->catalog_model->get_info($id);
    	if(!$catalog){
    		
    		redirect();

    	}
    }
    function detail()
    {
    	$id = $this->uri->rsegment(3);
    	$product = $this->product_model->get_info($id);
    	if(!$product) redirect();
    	$this->data['product'] = $product;
    	$this->view('/web/product/index');
    }
}