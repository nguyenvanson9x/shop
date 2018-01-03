<?php 
class About extends Public_Controller
{
    
    function index() {
        $this->data['name'] = 'This is data from About controller';
        $this->view('web/about');
    }
}
 ?>