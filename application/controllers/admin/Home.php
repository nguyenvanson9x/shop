<?php
Class Home extends MY_Controller
{
    function index()
    {
        // Tai cac file thanh phan
        $this->load->model('account_model');
        $this->load->model('transaction_model');
        $this->load->model('news_model');
        $this->load->model('product_model');
        $this->load->model('contact_model');
        
        //thong ke doanh thu ngay hom nay
        $today = get_date(now());
        $time  = get_time_between($today);
        $where = array(
            'order_date <=' => $time['end'],
            'order_date >=' => $time['start'],
            'payment_status' => 1);
        $amount_to_day = $this->transaction_model->get_sum('money', $where);
        $this->data['amount_to_day'] = $amount_to_day;
        //tong thu theo thang nay
        $thangnay = get_date(now());
        $time     = get_time_between($thangnay, '1');
        $where = array(
            'order_date <=' => $time['end'],
            'order_date >=' => $time['start'],
            'payment_status' => 1);
        $tongtien_thang = $this->transaction_model->get_sum('money', $where);
        $this->data['tongtien_thang'] = $tongtien_thang;
        
        //lay tong doanh thu
        $where = array('payment_status' => 1);
        $amount_total = $this->transaction_model->get_sum('money', $where);
        $this->data['amount_total'] = $amount_total;
        	
        //thống kê tổng số
        $this->data['total_transaction'] = $this->transaction_model->get_total();
        $this->data['total_product'] = $this->product_model->get_total();
        $this->data['total_news']    = $this->news_model->get_total();
        $this->data['total_user']    = $this->account_model->get_total();
        $this->data['total_news']    = $this->news_model->get_total();
        $this->data['total_contact'] = $this->contact_model->get_total();
        
        $this->lang->load('admin/home');
        // load view
        $this->render('admin/home/index');
    }
}