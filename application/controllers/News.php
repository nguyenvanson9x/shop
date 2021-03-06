<?php 
class News extends Public_Controller
{
    function __construct() {
        parent::__construct();
        // load model
        $this->load->model('news_model');
        $this->load->model('account_model');
    }

    function index() {
        // get data
        $listNews = $this->news_model->get_list();
        $this->data['listNews'] = $listNews;

        // load view
        $this->view('web/news');
    }

    function detail($id) {
        //check id
        if ($id == "") {
            // do something
            header('location: https://google.com');
        }
        else {
            $listnews = $this->news_model->get_info($id);
            $this->data['news'] = $listnews;

            $list = $this->news_model->get_list();
            $this->data['list'] = $list;
            $this->view('web/news_detail');
        }
    }
}