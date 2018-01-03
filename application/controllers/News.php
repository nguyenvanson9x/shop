<?php 
class News extends Public_Controller
{
    
    function index() {
        $this->data['name'] = 'This is data from News controller';
        $this->view('web/news');
    }
}
 ?>