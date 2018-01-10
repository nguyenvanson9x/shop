<?php
Class Coupon extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('coupon_model');
    }

    function index() {
      // get data
      $list = $this->coupon_model->get_list();
      $this->data['list'] = $list;
      $this->render('admin/coupon/index');
    }

    function add() {
      $this->render('admin/coupon/add');
    }

    function edit() {
      //load thư viện validate dữ liệu
      $this->load->library('form_validation');
      $this->load->helper('form');
  
      //lay id danh mục
      $id = $this->uri->rsegment(3);
      $info = $this->coupon_model->get_info($id);
      if(!$info)
      {
          //tạo ra nội dung thông báo
          $this->session->set_flashdata('message', 'Không tồn tại mã khuyến mãi này');
          redirect(admin_url('coupon'));
      }
      $this->data['info'] = $info;
      
      //neu ma co du lieu post len thi kiem tra
      if($this->input->post())
      {
          $this->form_validation->set_rules('code', 'Mã khuyến mãi', 'required');
          $this->form_validation->set_rules('discount', 'Giá trị khuyến mãi', 'required');
          $this->form_validation->set_rules('begin_at', 'Ngày bắt đầu', 'required');
          $this->form_validation->set_rules('expire_at', 'Ngày kết thúc', 'required');
          //nhập liệu chính xác
          if($this->form_validation->run())
          {
              //them vao csdl
              $code = $this->input->post('code');
              $discount = $this->input->post('discount');
              $begin_at = $this->input->post('begin_at');
              $expire_at = $this->input->post('expire_at');
  
              //luu du lieu can them
              $data = array(
                  'code'      => $code,
                  'discount' => $discount,
                  'begin_at' => get_time_from_date($begin_at),
                  'expire_at' => get_time_from_date($expire_at)
              );
              //them moi vao csdl
              if($this->coupon_model->update($id, $data))
              {
                  //tạo ra nội dung thông báo
                  $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
              }else{
                  $this->session->set_flashdata('message', 'Không cập nhật được');
              }
              //chuyen tới trang danh sách
              redirect(admin_url('coupon'));
          }
      }
      $this->render('admin/coupon/edit');
    }

    function delete() {
      $id = $this->uri->rsegment('3');
      $id = intval($id);
      //lay thong tin cua quan tri vien
      $info = $this->coupon_model->get_info($id);
      if(!$info)
      {
          $this->session->set_flashdata('message', 'Không tồn tại mã khuyễn mãi');
          redirect(admin_url('coupon'));
      }
      //thuc hiện xóa
      $this->coupon_model->delete($id);
      
      $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
      redirect(admin_url('coupon'));
    }
    function delete_all() {

    }
}
