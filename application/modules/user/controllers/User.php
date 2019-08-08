<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class User extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('User_model');
            $this->load->library('form_validation');
        }

        public function index()
        {

          $datauser=$this->User_model->get_all();//panggil ke modell
          $datafield=$this->User_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'user/user/user_list',
             'sidebar'=>'user/sidebar',
             'css'=>'user/user/css',
             'js'=>'user/user/js',
             'datauser'=>$datauser,
             'datafield'=>$datafield,
             'module'=>'user',
             'titlePage'=>'user',
             'controller'=>'user'
            );
          $this->template->load($data);
        }


        public function create(){
           $data = array(
             'content'=>'user/user/user_form',
             'sidebar'=>'user/sidebar',
             'action'=>'user/user/create_action',
             'module'=>'user',
             'titlePage'=>'user',
             'controller'=>'user'
            );
          $this->template->load($data);
        }

        public function edit($id_user){
          $dataedit=$this->User_model->get_by_id($id_user);
           $data = array(
             'content'=>'user/user/user_edit',
             'sidebar'=>'user/sidebar',
             'action'=>'user/user/update_action',
             'dataedit'=>$dataedit,
             'module'=>'user',
             'titlePage'=>'user',
             'controller'=>'user'
            );
          $this->template->load($data);
        }
public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
					'nama' => $this->input->post('nama',TRUE),
					'email' => $this->input->post('email',TRUE),
					'username' => $this->input->post('username',TRUE),
					'password' => $this->input->post('password',TRUE),
					
);

            $this->User_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user/user'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'nama' => $this->input->post('nama',TRUE),
					'email' => $this->input->post('email',TRUE),
					'username' => $this->input->post('username',TRUE),
					'password' => $this->input->post('password',TRUE),
					
);

            $this->User_model->update($this->input->post('id_user', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user/user'));
        }
    }

    public function delete($id_user)
    {
        $row = $this->User_model->get_by_id($id_user);

        if ($row) {
            $this->User_model->delete($id_user);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user/user'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/user'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('nama', 'nama', 'trim|required');
$this->form_validation->set_rules('email', 'email', 'trim|required');
$this->form_validation->set_rules('username', 'username', 'trim|required');
$this->form_validation->set_rules('password', 'password', 'trim|required');


	$this->form_validation->set_rules('id_user', 'id_user', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}