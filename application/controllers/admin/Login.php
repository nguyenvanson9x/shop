<?php
Class Login extends MY_controller{
    private $email = '';
    function index()
    {
        $this->load->library('form_validation');
        $this->load->helper('form');
        if($this->input->post())
        {
            $this->form_validation->set_rules('login' ,'login', 'callback_check_login');
            if($this->form_validation->run())
            {
                $this->load->model('account_model');
                $sql = "select * from account where email = '" . $this->email . "'";
                $acc = $this->account_model->query($sql);
                $this->session->set_userdata('login', $acc[0]->fullname);
                redirect(admin_url('home'));
            }
        }
        $this->load->view('admin/login/index');
    }
    
    /*
     * Kiem tra username va password co chinh xac khong
     */
    function check_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password = md5($password);
        
        $this->email = $username;
        $this->load->model('account_model');
        $where = array('email' => $username , 'password' => $password);
        if($this->account_model->check_exists($where))
        {
            return true;
        }
        $this->form_validation->set_message(__FUNCTION__, 'Không đăng nhập thành công');
        return false;
    }
}