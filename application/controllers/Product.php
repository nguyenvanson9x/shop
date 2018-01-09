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

        $input = array();
        $input['limit'] = array(10, 0);
        $product_related = $this->product_model->get_list($input);
        $this->data['product_related'] = $product_related;
        $input2 = array();
        $input2['limit'] = array(10, 0);
        $input2['order'] = array('view', 'DESC');
        $product_hot = $this->product_model->get_list($input2);
        $this->data['product_hot'] = $product_hot;


    	$id = $this->uri->rsegment(3);
    	$product = $this->product_model->get_info($id);
    	if(!$product) redirect();
    	$this->data['product'] = $product;
    	$this->view('/web/product/index');
    }
}