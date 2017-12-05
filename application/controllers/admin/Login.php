<?php

class Login extends Admin_Controller
{
    function index() {
        $this->data['name'] = 'This is data from admin/Login controller';
        $this->render('admin/login/index');
    }
}

