<?php
Class Product extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        //load ra file model
        $this->load->model('product_model');
    }
    
    /*
     * Hien thi danh sach san pham
     */
    function index()
    {
        //lay tong so luong ta ca cac san pham trong websit
        $total_rows = $this->product_model->get_total();
        $this->data['total_rows'] = $total_rows;
        
        //load ra thu vien phan trang
        $this->load->library('pagination');
        $config = array();
        $config['total_rows'] = $total_rows;//tong tat ca cac san pham tren website
        $config['base_url']   = admin_url('product/index'); //link hien thi ra danh sach san pham
        $config['per_page']   = 10;//so luong san pham hien thi tren 1 trang
        $config['uri_segment'] = 4;//phan doan hien thi ra so trang tren url
        $config['next_link']   = 'Trang kế tiếp';
        $config['prev_link']   = 'Trang trước';
        //khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        
        $segment = $this->uri->segment(4);
        $segment = intval($segment);
        
        $input = array();
        $input['limit'] = array($config['per_page'], $segment);
        
        //kiem tra co thuc hien loc du lieu hay khong
        $id = $this->input->get('id');
        $id = intval($id);
        $input['where'] = array();
        if($id > 0)
        {
            $input['where']['id'] = $id;
        }
        $name = $this->input->get('name');
        if($name)
        {
            $input['like'] = array('name', $name);
        }
        $supplier_id = $this->input->get('supplier');
        $supplier_id = intval($supplier_id);
        if($supplier_id > 0)
        {
            $input['where']['supplier_id'] = $supplier_id;
        }
        
        //lay danh sach san pham
        $list = $this->product_model->get_list($input);
        $this->data['list'] = $list;
       
        //lay danh sach danh muc san pham
        $this->load->model('supplier_model');
        $input = array();
        $supplier = $this->supplier_model->get_list($input);
        $this->data['supplier'] = $supplier;
        
        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        
        //load view
        $this->render("admin/product/index");
    }
    
    /*
     * Them san pham moi
     */
    function add()
    {
        //lay danh sach danh muc san pham
        $this->load->model('supplier_model');
        $input = array();
        $supplier = $this->supplier_model->get_list($input);
        $this->data['supplier'] = $supplier;

        //lay loai san pham
        $this->load->model('category_model');
        $input = array();
        $category = $this->category_model->get_list($input);
        $this->data['category'] = $category;
        
        //load thư viện validate dữ liệu
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
        
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $name        = $this->input->post('name');
                $category_id  = $this->input->post('category_id');
                $supplier_id  = $this->input->post('supplier_id');
                $price       = $this->input->post('price');
                $price       = str_replace(',', '', $price);                
                $discount = $this->input->post('discount');
                $discount = str_replace('%', '', $discount);
                $expire_discount = $this->input->post('expire_discount');
                $expire_discount = get_time_from_date($expire_discount);
                
                
                //lay ten file anh minh hoa duoc update len
                $this->load->library('upload_library');
                $upload_path = '/upload/product';
                $upload_data = $this->upload_library->upload($upload_path, 'image');  
                $image_link = '';
                if(isset($upload_data['file_name']))
                {
                    $image_link = $upload_data['file_name'];
                }
                else {
                    $image_link = '/upload/unknown.png';
                }
                
                //luu du lieu can them
                $data = array(
                    'name'       => $name,
                    'category_id' => $category_id,
                    'supplier_id' => $supplier_id,
                    'price'      => $price,
                    'image' => $image_link,
                    'discount'   => $discount,
                    'expire_discount'   => $expire_discount,
                    'content'    => $this->input->post('content'),
                    'created_at'    => now(),
                ); 
                //them moi vao csdl
                if($this->product_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('product'));
            }
        }
        
        
        //load view;
        $this->render("admin/product/add");
    }
    
    /*
     * Chinh sua san pham
     */
    function edit()
    {
        $id = $this->uri->rsegment('3');
        $product = $this->product_model->get_info($id);
        if(!$product)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'Không tồn tại sản phẩm này');
            redirect(admin_url('product'));
        }
        $this->data['product'] = $product;
       
        //lay danh sach danh muc san pham
        $this->load->model('supplier_model');
        $input = array();
        $supplier = $this->supplier_model->get_list($input);
        $this->data['supplier'] = $supplier;

        //lay loai san pham
        $this->load->model('category_model');
        $input = array();
        $category = $this->category_model->get_list($input);
        $this->data['category'] = $category;

        //load thư viện validate dữ liệu
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Tên', 'required');
            $this->form_validation->set_rules('supplier', 'Thể loại', 'required');
            $this->form_validation->set_rules('price', 'Giá', 'required');
        
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $name        = $this->input->post('name');
                $supplier_id  = $this->input->post('supplier_id');
                $price       = $this->input->post('price');
                $price       = str_replace(',', '', $price);                
                $discount = $this->input->post('discount');
                $discount = str_replace('%', '', $discount);
                $expire_discount = $this->input->post('expire_discount');
                $expire_discount = get_time_from_date($expire_discount);
                
                //lay ten file anh minh hoa duoc update len
                $this->load->library('upload_library');
                $upload_path = '/upload/product';
                $upload_data = $this->upload_library->upload($upload_path, 'image');
                $image_link = '';
                if(isset($upload_data['file_name']))
                {
                    $image_link = $upload_data['file_name'];
                }
        
                //luu du lieu can them
                $data = array(
                    'name'       => $name,
                    'category_id' => $this->input->post('category_id'),
                    'supplier_id' => $supplier_id,
                    'price'      => $price,
                    'image' => $image_link,
                    'discount'   => $discount,
                    'expire_discount'   => $expire_discount,
                    'type' => $this->input->post('type'),
                    'content'    => $this->input->post('content'),
                );
                if($image_link != '')
                {
                    $data['image_link'] = $image_link;
                }
                
                //them moi vao csdl
                if($this->product_model->update($product->id, $data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không cập nhật được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('product'));
            }
        }
        
        
        //load view
        $this->render("admin/product/edit");
    }
    
    /*
     * Xoa du lieu
     */
    function del()
    {
        $id = $this->uri->rsegment(3);
        $this->_del($id);
        
        //tạo ra nội dung thông báo
        $this->session->set_flashdata('message', 'không tồn tại sản phẩm này');
        redirect(admin_url('product'));
    }
    
    /*
     * Xóa nhiều sản phẩm
     */
    function delete_all()
    {
        $ids = $this->input->post('ids');
        foreach ($ids as $id)
        {
            $this->_del($id);
        }
    }
    
    /*
     *Xoa san pham
     */
    private function _del($id)
    {
        $product = $this->product_model->get_info($id);
        if(!$product)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'không tồn tại sản phẩm này');
            redirect(admin_url('product'));
        }
        //thuc hien xoa san pham
        $this->product_model->delete($id);
        //xoa cac anh cua san pham
        $image_link = '/upload/product/'.$product->image;
        if(file_exists($image_link))
        {
            unlink($image_link);
        }
    }
}



