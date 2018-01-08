<?php

class Collections extends Public_Controller
{
  function index() {
    header("location: collections/");

  }

  function all() {
    $this->load->model('product_model');
    $input = array();
    $intput['limit'] = array(0,3);
    $product = $this->product_model->get_list($input);
    $this->data['product'] = $product;
    $this->view("web/collections/all");
  }

  function new() {
    $this->load->model('product_model');
    $input = array();
    $intput['limit'] = array(0,3);
    $product_newest = $this->product_model->get_list($input);
    $this->data['product_newest'] = $product_newest;
    $this->view("web/collections/new");
  }
  function hot() {
    $this->load->model('product_model');
    $input = array();
    $intput['limit'] = array(0,3);
    $product_hot = $this->product_model->get_list($input);
    $this->data['product_hot'] = $product_hot;
    $this->view("web/collections/hot");
  }
  function discount() {
    $this->load->model('product_model');
    $input = array();
    $intput['limit'] = array(0,3);
    $product_discount = $this->product_model->get_list($input);
    $this->data['product_discount'] = $product_discount;
    $this->view("web/collections/discount");
  }
}
