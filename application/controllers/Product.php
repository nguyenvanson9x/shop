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
        $count = 0;
        $this->data['count'] = $count;
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
        $temp = $product->view + 1;
        $views = array('view' => $product->view+1);
        $sql = 'UPDATE product SET view='.$temp .' WHERE id='.$product->id;
        if($this->product_model->update($product->id, $views))
        $this->data['views'] = $product->view;
    	$this->view('/web/product/index');
    }
}