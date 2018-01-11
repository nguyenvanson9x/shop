<?php
Class Transaction extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        //load ra file model
        $this->load->model('transaction_model');
        
        // Tai cac file thanh phan
        $this->load->helper('language');
        $this->lang->load('admin/transaction');
        $this->lang->load('admin/common');
        
    }
    
    /*
     * Hien thi danh sach giao dịch
     */
    function index()
    {
        //lay tong so luong ta ca cac giao dich trong websit
        $total_rows = $this->transaction_model->get_total();
        $this->data['total_rows'] = $total_rows;
        
        //load ra thu vien phan trang
        $this->load->library('pagination');
        $config = array();
        $config['total_rows'] = $total_rows;//tong tat ca cac giao dich tren website
        $config['base_url']   = admin_url('transaction/index'); //link hien thi ra danh sach giao dich
        $config['per_page']   = 10;//so luong giao dich hien thi tren 1 trang
        $config['uri_segment'] = 4;//phan doan hien thi ra so trang tren url
        $config['next_link']   = 'Trang kế tiếp';
        $config['prev_link']   = 'Trang trước';
        //khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        
        $segment = $this->uri->segment(4);
        $segment = intval($segment);
        
        $input = array();
        $input['limit'] = array($config['per_page'], $segment);
        
        //kiem tra co thuc hien loc du lieu hay khong
        $id = $this->input->get('id');
        $id = intval($id);
        $where = array();
        $input['where'] = array();
        if($id > 0)
        {
            $where['id'] = $id;
        }
        //lọc theo thành viên
        $user = $this->input->get('user_name');
        if($user)
        {
            $where['user_name'] = $user;
        }
        
        //lọc theo cổng thanh toán
        $payment_status = $this->input->get('payment_status');
        if($payment_status != "")
        {
            $where['payment_status'] = $payment_status;
        }
        
        //lọc theo trạng thái thanh toán
        $delivery_status = $this->input->get('delivery_status');
        if($delivery_status != '')
        {
            $where['delivery_status'] = $delivery_status;
        }
        //lọc theo thời gian
   	    $created_to = $this->input->get('created_to');
   	    $created    = $this->input->get('created');
   	    if($created && $created_to)
   	    {
   	    	//tiem kiem tu ngay A -> B
   	    	$time = get_time_between_day($created,$created_to);
   	        //nếu dữ liệu trả về hợp lệ
	   	    if(is_array($time))
	   	    {	
		   	    $where['order_date >='] = $time['start'];
		   	    $where['order_date <='] = $time['end'];
	   	    }
   	    }
        //gắn các điệu điện lọc
        $input['where'] = $where;
        
        //lay danh sach giao dịch
        $list = $this->transaction_model->get_list($input);
        $this->data['list'] = $list;

        $this->data['filter'] = $input['where'];
        $this->data['created_to'] = $created_to;
        $this->data['created']    = $created;
        
        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        $this->render("admin/transaction/index");
    }
    
    /*
     * Xuất dữ liệu ra file excel
     */
    public function export()
    {
        //lay toan bo giao dịch
        $list = array();
        $list = $this->transaction_model->get_list();
        foreach ($list as $row)
        {
            $row->_amount = number_format($row->money);
            if($row->payment_status == 0)
            {
                $row->_status = 'pending';
            }
            elseif($row->payment_status == 1)
            {
                $row->_status = 'completed';
            }
            elseif($row->payment_status == 2)
            {
                $row->_status = 'cancel';
            }
    
        }
        $this->data['list'] = $list;
        // Hien thi view
        $this->load->view('admin/transaction/export', $this->data);
    }
    
    /*
     * ------------------------------------------------------
     *  Action handle
     * ------------------------------------------------------
     */
    /**
     * Xem chi tiet giao dich
     */
    function detail()
    {
        //lay id cua giao dịch ma ta muon xoa
        $id = $this->uri->rsegment('3');
        //lay thong tin cua giao dịch
        $info = $this->transaction_model->get_info($id);
        if(!$info)
        {
            return false;
        }
        $info->_amount = number_format($info->money);
        if($info->payment_status == 0)
        {
            $info->_payment = 'pending';//chua thanh toan
        }
        elseif($info->payment_status == 1)
        {
            $info->_payment = 'completed';//da thanh toan
        }

        if ($info->delivery_status == 0) {
            $info->_delivery = 'pending';
        }
        elseif ($info->delivery_status == 1) {
            $info->_delivery = 'completed';
        }
        else {
            $info->_delivery = 'cancel';
        }
        //link hủy bỏ đơn hàng
        $info->_url_cancel = admin_url('transaction/cancel/'.$info->id);
        //link thanh toan
        $info->_url_payment = admin_url('transaction/payment/'.$info->id);
        //link giao hang
        $info->_url_deliver = admin_url('transaction/deliver/'.$info->id);

        $info->_can_payment = true;//có thể thực hiện kích hoạt đơn hàng này hay không
        $info->_can_deliver = true;
        $info->_can_cancel = true;//có thể hủy đơn hàng hay không

        if ($info->payment_status == 1) {
            $info->_can_payment = false;
        }

        if ($info->delivery_status != 0) {
            $info->_can_deliver = false;
            $this->_can_cancel = false;
        }

        //load model sản phẩm product_model
        $this->load->model('product_model');
        $product = $this->product_model->get_info($info->product_id);

        $this->data['info']   = $info;
        $this->data['product'] = $product;
        // Tai file thanh phan
        $this->load->view('admin/transaction/detail', $this->data);
    }
    
    /**
     * Xac nhan thanh toan
     */
    function payment()
    {
        $this->operation('payment_status', 1, 'Đã cập nhật trạng thái Thanh toán thành công');
    }
    
    /**
     * Xac nhan giao hang
     */
    function deliver() {
        $this->operation('delivery_status', 1, 'Đã cập nhật trạng thái giao hàng thành công');
    }

    /**
     * Huy bo giao dich
     */
    function cancel()
    {
        $this->operation('delivery_status', 2, 'Đã hủy đơn hàng thành công');
    }
    
    private function operation($field, $value, $message) {
        //lay id cua đơn hàng ma ta muon kích hoạt
        $id = $this->uri->rsegment('3');
        //lay thong tin cua giao dịch
        $info = $this->transaction_model->get_info($id);
        if(!$info)
        {
            $this->session->set_flashdata('message', 'Không tồn tại đơn hàng này');
            redirect(admin_url('transaction'));
        }
    
        //Cập nhật trạng thái
        $data = array();
        $data[$field] = $value;
        $data['update_at'] = now();
        $data['note'] = 'Lần cuối thay đổi: ' . mdate('%d-%m-%Y %h:%i:%s', now());
        $this->transaction_model->update($id, $data);
        	
        //gui thong bao
        $this->session->set_flashdata('message', $message);
        redirect(admin_url('transaction'));
    }
    /*
     * Xoa du lieu
     */
    function del()
    {
        $id = $this->uri->rsegment(3);
        $this->_del($id);
    
        //tạo ra nội dung thông báo
        $this->session->set_flashdata('message', 'Xóa giao dịch thành công');
        redirect(admin_url('transaction'));
    }
    
    /*
     * Xóa nhiều sản phẩm
     */
    function delete_all()
    {
        $ids = $this->input->post('ids');
        foreach ($ids as $id)
        {
            $this->_del($id);
        }
    }
    
    /*
     *Xoa san pham
     */
    private function _del($id)
    {
        $transaction = $this->transaction_model->get_info($id);
        if(!$transaction)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'không tồn tại giao dịch này');
            redirect(admin_url('transaction'));
        }
        //thuc hien xoa san pham
        $this->transaction_model->delete($id);
        
    }
}
