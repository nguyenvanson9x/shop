<?php

class Collections extends Public_Controller
{
  function index() {
    header("location: collections/");
  }

  function all() {
        $this->load->model('product_model');

        
        $sql = "SELECT * FROM product";
        $list = $this->product_model->query($sql);
        $total_rows = count($list);
        $this->data['total_rows'] = $total_rows;
            
        //load ra thu vien phan trang
        $this->load->library('pagination');
        $config = array();
        $config['total_rows'] = $total_rows;//tong tat ca cac san pham tren website
        $config['base_url']   = base_url()."/collections/all"; //link hien thi ra danh sach san pham
        $config['use_page_numbers'] = TRUE;
        $config['per_page']   = 20;//so luong san pham hien thi tren 1 trang
        $config['uri_segment'] = 3;//phan doan hien thi ra so trang tren url
        $config['first_tag_open'] = '<span class="firstlink">';
        $config['first_tag_close'] = '</span>';
          
        $config['last_tag_open'] = '<span class="lastlink">';
        $config['last_tag_close'] = '</span>';
          
        $config['next_tag_open'] = '<span class="nextlink">';
        $config['next_tag_close'] = '</span>';
          
        $config['prev_tag_open'] = '<span class="prevlink">';
        $config['prev_tag_close'] = '</span>';
        //khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        
        $segment = $this->uri->segment(3);
        $segment = intval($segment);
        
        $input = array();
        $input['limit'] = array($config['per_page'], $segment);

        $input['order'] = array('name','INSC');
        $product = $this->product_model->get_list($input);
        $this->data['product'] = $product;
        $str_links = $this->pagination->create_links();
        $this->data["links"] = explode('&nbsp;',$str_links );
        $this->view("web/collections/all");
  }

  function new() {
    $this->load->model('product_model');
    $input = array();
    $input['limit'] = array(20, 0);
    $input['order'] = array('create_at', 'DESC');
    $product_newest = $this->product_model->get_list($input);
    $this->data['product_newest'] = $product_newest;
    $this->view("web/collections/new");
  }
  function hot() {
    $this->load->model('product_model');
    $input = array();
    $input['limit'] = array(20, 0);
    $input['order'] = array('view', 'DESC');
    $product_hot = $this->product_model->get_list($input);
    $this->data['product_hot'] = $product_hot;
    $this->view("web/collections/hot");
  }
  function discount() {
    $this->load->model('product_model');
    $sql = "SELECT * FROM product WHERE discount!=0";
    $list = $this->product_model->query($sql);
    $total_rows = count($list);
    $this->data['total_rows'] = $total_rows;
    
    //load ra thu vien phan trang
    $this->load->library('pagination');
    $config = array();
    //$config['total_rows'] = $total_rows;//tong tat ca cac san pham tren website
    $config['base_url']   = base_url()."/collections/discount"; //link hien thi ra danh sach san pham
    $config['use_page_numbers'] = TRUE;
    $config['per_page']   = 20;//so luong san pham hien thi tren 1 trang
    $config['uri_segment'] = 3;//phan doan hien thi ra so trang tren url
    $config['first_tag_open'] = '<span class="firstlink">';
    $config['first_tag_close'] = '</span>';
      
    $config['last_tag_open'] = '<span class="lastlink">';
    $config['last_tag_close'] = '</span>';
      
    $config['next_tag_open'] = '<span class="nextlink">';
    $config['next_tag_close'] = '</span>';
      
    $config['prev_tag_open'] = '<span class="prevlink">';
    $config['prev_tag_close'] = '</span>';
    //khoi tao cac cau hinh phan trang
    $this->pagination->initialize($config);
    
    $segment = $this->uri->segment(3);
    $segment = intval($segment);
    
    $input = array();
    $input['limit'] = array($config['per_page'], $segment);
    $input['order'] = array('discount','DESC');
    $product_discount = $this->product_model->get_list($input);
    $this->data['product_discount'] = $product_discount;
    $str_links = $this->pagination->create_links();
    $this->data["links"] = explode('&nbsp;',$str_links );
    $this->view("web/collections/discount");
  }
}
