<?php

class Collections extends Public_Controller
{
  function index() {
    header("location: collections/");

  }

  function all() {
    $this->load->model('product_model');
    $input = array();
    $input['order'] = array('name','INSC');
    $product = $this->product_model->get_list($input);
    $this->data['product'] = $product;
    $this->view("web/collections/all");
  }

  function new() {
    $this->load->model('product_model');
    $input = array();
    $input['limit'] = array(10, 0);
    $input['order'] = array('create_at', 'DESC');
    $product_newest = $this->product_model->get_list($input);
    $this->data['product_newest'] = $product_newest;
    $this->view("web/collections/new");
  }
  function hot() {
    $this->load->model('product_model');
    $input = array();
    $input['limit'] = array(12, 0);
    $input['order'] = array('view', 'DESC');
    $product_hot = $this->product_model->get_list($input);
    $this->data['product_hot'] = $product_hot;
    $this->view("web/collections/hot");
  }
  function discount() {
    $this->load->model('product_model');
    $input = array();
    $input['order'] = array('discount','DESC');
    $product_discount = $this->product_model->get_list($input);
    $this->data['product_discount'] = $product_discount;
    $this->view("web/collections/discount");
  }
}
