<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    public $data = array();
    public $count = 0;
	function __construct() {
        parent::__construct();
        $controller = $this->uri->segment(1);
        //$this->session->set_userdata(array('login' => 'comment this line to go Login page'));
        switch ($controller) {
            case 'admin':
            {
                //xu ly cac du lieu khi truy cap vao trang admin
                $this->load->helper('admin');
                $this->_check_login();
                break;
            }
            default:
            {
                // Get data from database, send them to front-end
                break;
            }
        }
	}
    protected function render($the_view = NULL, $template = 'master') {
        if($template == 'json' || $this->input->is_ajax_request()) {
            header('Content-Type: application/json');
            echo json_encode($this->data);
        }
        elseif(is_null($template)) {
            $this->load->view($the_view,$this->data);
        }
        else {
            $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view, $this->data, TRUE);
            $this->load->view('layout_admin/' . $template, $this->data);
        }
    }
    protected function view($the_view = NULL, $template = 'master') {
        if($template == 'json' || $this->input->is_ajax_request()) {
            header('Content-Type: application/json');
            echo json_encode($this->data);
        }
        elseif(is_null($template)) {
            $this->load->view($the_view,$this->data);
        }
        else {
            $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view, $this->data, TRUE);
            $this->load->view('layout_web/' . $template, $this->data);
        }
    }
        /*
     * Kiem tra trang thai dang nhap cua admin
     */
    private function _check_login()
    {
        $controller = $this->uri->rsegment('1'); //get controller of page
        $controller = strtolower($controller);
    
        $login = $this->session->userdata('login');
        //neu ma chua dang nhap,ma truy cap 1 controller khac login
        if(!$login && $controller != 'login')
        {
            redirect(admin_url('login'));
        }
        //neu ma admin da dang nhap thi khong cho phep vao trang login nua.
        if($login && $controller == 'login')
        {
            redirect(admin_url(''));
        }
    }
}
class Admin_Controller extends MY_Controller {
    function __construct() {
        parent::__construct();
    }
    protected function render($the_view = NULL, $template = 'master') {
        parent::render($the_view, $template);
    }
}
class Public_Controller extends MY_Controller {
    function __construct() {
        parent::__construct();            
    }
}