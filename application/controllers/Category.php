<?php

class Category extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Check if user is logged in or id exists in session
        //if ($this->session->userdata('user_id')) {
        //} else {

        //     redirect(base_url() . 'index.php/Users/login');
        // }
    }

    // List Categories
    public function list_categories()
    {
        // $group_id = $this->session->userdata("group_id");
        // //if ($group_id != 1) {
        //     $Page = $this->General->check_url_permission_single();
        // }
        $data['categories'] = $this->Main_model->select_records("category");
        $this->header($title = 'Category List');
        $this->load->view('category/list_category', $data);
        $this->footer();
    }

    public function insert_category()
    {
        $category_name = $this->input->post('category_name');
        $data = array(
            'category_name' => $category_name
        );
        $response = $this->Main_model->add_record('category', $data);
        if ($response) {
            $this->session->set_flashdata('success', 'Record added Successfully..!');
            redirect(base_url() . 'index.php/category/list_category');
        else:
            $this->session->set_flashdata('error', 'Nothing to update');
            redirect(base_url() . 'category/list_category');
        endif;
        }

        public function update_category()
    	{
        $category_name = $this->input->post('category_name');
        $data = array(
            'category_name' => $category_name
        );
        $where = array($this->input->post('category_id'));
        $response = $this->Main_model->add_record('category', $data, $where);
        if ($response) {
            $this->session->set_flashdata('success', 'Record updated Successfully..!');
            redirect(base_url() . 'index.php/category/list_category');
        else:
            $this->session->set_flashdata('error', 'Nothing to update');
            redirect(base_url() . 'category/list_category');
        endif;
        }
    }
}