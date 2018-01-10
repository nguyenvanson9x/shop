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

    $config['base_url'] = base_url('info');
    $config['total_rows'] = $this->Donor_model->count();
    $config['per_page'] = 10;
    $config['uri_segment'] = 3;
    $choice = $config['total_rows']/$config['per_page'];
    $config['num_links'] = round($choice);


    $this->pagination->initialize($config);

    $page =($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $data['data'] = $this->Donor_model->get_data([], [],$config['per_page'],$page);

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
