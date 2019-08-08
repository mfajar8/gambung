<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Sertifikat extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Sertifikat_model');
            $this->load->library('form_validation');
        }

        public function index()
        {

          $datasertifikat=$this->Sertifikat_model->get_all();//panggil ke modell
          $datafield=$this->Sertifikat_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'sertifikat/sertifikat/sertifikat_list',
             'sidebar'=>'sertifikat/sidebar',
             'css'=>'sertifikat/sertifikat/css',
             'js'=>'sertifikat/sertifikat/js',
             'datasertifikat'=>$datasertifikat,
             'datafield'=>$datafield,
             'module'=>'sertifikat',
             'titlePage'=>'sertifikat',
             'controller'=>'sertifikat'
            );
          $this->template->load($data);
        }


        public function create(){
           $data = array(
             'content'=>'sertifikat/sertifikat/sertifikat_form',
             'sidebar'=>'sertifikat/sidebar',
             'action'=>'sertifikat/sertifikat/create_action',
             'module'=>'sertifikat',
             'titlePage'=>'sertifikat',
             'controller'=>'sertifikat'
            );
          $this->template->load($data);
        }

        public function edit($id_sertifikat){
          $dataedit=$this->Sertifikat_model->get_by_id($id_sertifikat);
           $data = array(
             'content'=>'sertifikat/sertifikat/sertifikat_edit',
             'sidebar'=>'sertifikat/sidebar',
             'action'=>'sertifikat/sertifikat/update_action',
             'dataedit'=>$dataedit,
             'module'=>'sertifikat',
             'titlePage'=>'sertifikat',
             'controller'=>'sertifikat'
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
					'pembuat' => $this->input->post('pembuat',TRUE),
					'tanggal_keluar' => $this->input->post('tanggal_keluar',TRUE),
					'penerima' => $this->input->post('penerima',TRUE),
					'foto_sertifikat' => $this->input->post('foto_sertifikat',TRUE),
					'link_sertifikat' => $this->input->post('link_sertifikat',TRUE),
					'id_user' => $this->input->post('id_user',TRUE),
					
);

            $this->Sertifikat_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('sertifikat/sertifikat'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'pembuat' => $this->input->post('pembuat',TRUE),
					'tanggal_keluar' => $this->input->post('tanggal_keluar',TRUE),
					'penerima' => $this->input->post('penerima',TRUE),
					'foto_sertifikat' => $this->input->post('foto_sertifikat',TRUE),
					'link_sertifikat' => $this->input->post('link_sertifikat',TRUE),
					'id_user' => $this->input->post('id_user',TRUE),
					
);

            $this->Sertifikat_model->update($this->input->post('id_sertifikat', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('sertifikat/sertifikat'));
        }
    }

    public function delete($id_sertifikat)
    {
        $row = $this->Sertifikat_model->get_by_id($id_sertifikat);

        if ($row) {
            $this->Sertifikat_model->delete($id_sertifikat);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('sertifikat/sertifikat'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('sertifikat/sertifikat'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('pembuat', 'pembuat', 'trim|required');
$this->form_validation->set_rules('tanggal_keluar', 'tanggal_keluar', 'trim|required');
$this->form_validation->set_rules('penerima', 'penerima', 'trim|required');
$this->form_validation->set_rules('foto_sertifikat', 'foto_sertifikat', 'trim|required');
$this->form_validation->set_rules('link_sertifikat', 'link_sertifikat', 'trim|required');
$this->form_validation->set_rules('id_user', 'id_user', 'trim|required');


	$this->form_validation->set_rules('id_sertifikat', 'id_sertifikat', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}