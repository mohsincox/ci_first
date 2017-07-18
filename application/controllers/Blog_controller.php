<?php

class Blog_controller extends CI_Controller {

	// public function __construct()
 //    {
 //        parent::__construct();
 //        $this->load->model('news_model');
 //        $this->load->helper('url_helper');
 //        //$this->load->library('parser');
 //    }
        public function blog()
        {
                $this->load->model('Blog_model');

                $data['query'] = $this->Blog_model->get_last_ten_entries();

                $this->load->view('blog/index', $data);
        }

        public function create()
        {
        	$this->load->view('blog/create');
        }

        public function store()
        {
        	//echo 'test';
        	$this->load->model('Blog_model');
        	$this->Blog_model->insert_entry();
        }

        public function edit($id)
        {
        	$data['id'] = $id;
        	$this->load->view('blog/edit', $data);
        }

        public function update()
        {
        	//echo 'test';
        	$this->load->model('Blog_model');
        	$this->Blog_model->update_entry();
        }
}