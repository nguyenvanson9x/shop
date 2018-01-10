<?php

class Checkout extends Public_Controller
{
    function index() {
        $this->data['name'] = 'This is data from Home controller aaaa';
        $this->view('web/checkout');
    }

    public function ajax() {
        // error array
        $errors = array('error' => 0);

        // get data from page
        $user_name      = $this->input->post('user_name');
        $user_email     = $this->input->post('user_email');
        $user_phone     = $this->input->post('user_phone');
        $user_address   = $this->input->post('user_address');
        $coupon         = $this->input->post('coupon');
        $token          = $this->input->post('token');
        $price          = (int)$this->input->post('price');
        $product_id     = (int)$this->input->post('product_id');
        // check security by token
        if ($token != md5($price)) {
            $error['error'] = 1;
            $error['token'] = 'Invalid token';
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
            $data = array(
                'product_id' => $product_id,
                'user_name' => $user_name,
                'user_email' => $user_email,
                'user_phone' => $user_phone,
                'user_address' => $user_address,
                'money' => $price,
                'order_date' => now()
            );
            
            if(!$this->transactions_model->create($data))
            {
                $errors['error'] = 1;
                $errors['order'] = "Đặt hàng không thành công";
            }
        }
        die (json_encode($errors));
    }
}
