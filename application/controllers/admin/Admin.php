<?php
// For testing
class Admin extends Admin_Controller {
    function __construct() {
        parent::__construct();
       $this->load->model('admin_model'); 
    }
    
    function create() {
        $data = array(
                    'username'  => 'NVS',
                    'password'  => md5('NVS'),
                    'name'      => 'Son'
                );
        if ($this->admin_model->create($data))
            echo "Insert ok";
        else
            echo "Insert not ok";
    }
    
    function getList() {
        $input = array();
        $input['order'] = array('id', 'desc');
        $list = $this->admin_model->get_list($input);
        return $this->twig->display('content', array('entities' => $list));
    }
}