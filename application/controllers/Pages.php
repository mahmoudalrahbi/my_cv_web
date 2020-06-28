<?php

    class Pages extends CI_Controller{

        function __construct() {
            parent::__construct();
            
            // Load url helper
            $this->load->helper('url');
        }

        public function view($page = 'home'){
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }

            
            $data['title'] =ucfirst($page);
            $this->load->view('pages/'.$page,$data);
        
        }
    }