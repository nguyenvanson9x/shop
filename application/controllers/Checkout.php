<?php

class Checkout extends Public_Controller
{
    function index() {
        redirect(site_url());
    }

    function ajax() {
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'caolinhchi4398@gmail.com',
            'smtp_pass' => 'heartbreaker96',
            'mailtype'  => 'html', 
            'charset' => 'utf-8',
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->initialize($config);
        // error array
        $errors = array('error' => 0);

        // get data from page
        $user_name      = $this->input->post('user_name');
        $user_email     = $this->input->post('user_email');
        $user_phone     = $this->input->post('user_phone');
        $user_address   = $this->input->post('user_address');
        $coupon         = $this->input->post('coupon');
        $token          = $this->input->post('token');
        $price          = $this->input->post('price');
        $product_id     = (int)$this->input->post('product_id');
        $used_coupon    = (int)$this->input->post('usedCoupon');
        // check security by token
        if (!$token) {
            $errors['error'] = 1;
            $errors['token'] = 'Invalid token';
        } else {
            // simple validate data
            if (empty($user_name)){
                $errors['user_name'] = 'Bạn chưa nhập Họ tên';
            }
             
            if (empty($user_email)){
                $errors['password'] = 'Bạn chưa nhập Email';
            }
             
            if (empty($user_phone)){
                $errors['email'] = 'Bạn chưa nhập Số điện thoại';
            }
            if (empty($user_address)){
                $errors['email'] = 'Bạn chưa nhập Địa chỉ';
            }

            if (count($errors) > 1){
                $errors['error'] = 1;
                die (json_encode($errors));
            }
            
            
            // insert transaction info to database
            $this->load->model('transaction_model');
            $this->load->model('coupon_model');
            if ($used_coupon == 1 && $coupon != "") {
                $sql = "select * from coupon where code = '" . $coupon . "' and used = 0";
                $couponList = $this->coupon_model->query($sql);
                if (count($couponList) > 0)
                    $price = $price - $price * $couponList[0]->discount / 100;
            }
            $data = array(
                'product_id' => $product_id,
                'user_name' => $user_name,
                'user_email' => $user_email,
                'user_phone' => $user_phone,
                'user_address' => $user_address,
                'money' => $price,
                'order_date' => now()
            );
            
            if($this->transaction_model->create($data))
            {
                if ($used_coupon == 1) {
                    $sql = "update coupon set used = 1 where code = '" . $coupon . "'";
                    $this->db->query($sql);
                }
                $this->email->from('caolinhchi4398@gmail.com','HoTro');
                $this->email->to('nguyenvanson_t59@hus.edu.vn');
                $this->email->subject('Tieu_de_email');
                $this->email->message('noi_dung_email');
                // if (!$this->email->send()) {
                //     $errors['email'] = 'sendding email fail';
                // }
            }
            else {
                $errors['error'] = 1;
                $errors['order'] = "Đặt hàng không thành công";
            }
        }
        die (json_encode($errors));
    }

    function coupon() {
        $errors = array('error' => 0);
        $errors['coupon'] = 1;
        // get data
        $coupon         = $this->input->post('coupon');
        $token          = $this->input->post('token');
        $price          = (int)$this->input->post('price');
        if (!$token) {
            $errors['error'] = 1;
            $errors['token'] = 'Invalid token';
        } else {
            if ($coupon != "") {
                // load model
                $this->load->model('coupon_model');
                $sql = "select * from coupon where code = '" . $coupon . "' and used = 0";
                $couponList = $this->coupon_model->query($sql);
                if (count($couponList) > 0) {
                    $discount = $price * $couponList[0]->discount / 100;
                    $price = $price - $discount;
                    $errors['discount'] = $discount;
                    $errors['coupon'] = 0;
                }
                $errors['price'] = $price;
            }
        }
        die (json_encode($errors));
    }
}
