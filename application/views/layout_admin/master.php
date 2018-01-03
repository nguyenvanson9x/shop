<html>
    <head>
        <?php $this->load->view('layout_admin/include/head')?>
    </head>
    
    <body>
          <div id="left_content">
                <?php $this->load->view('layout_admin/include/left')?>
          </div>
          
          <div id="rightSide">
                 <?php $this->load->view('layout_admin/include/header')?>
                 
                 <!-- Content -->
                 <?php echo $the_view_content;?>
                 <!-- End content -->
                 
                 <?php $this->load->view('layout_admin/include/footer')?>
          </div>
          <div class="clear"></div>
          
    </body>
</html>